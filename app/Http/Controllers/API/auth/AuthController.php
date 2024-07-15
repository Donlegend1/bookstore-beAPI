<?php

namespace App\Http\Controllers\API\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\QueryException;
use Exception;


class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $password = $request->password;
        try {
            $user = new User();
            $user->fullname = $fullname;
            $user->email = $email;
            $user->password =Hash::make($password);
            $user->save();
        
            Auth::login($user);
            $token = $user->createToken('token')->plainTextToken;
        
            return response()->json([
                'message' => 'User registered and logged in successfully.',
                'token' => $token,
                'user' => $user,
                'token_type' => 'Bearer'
            ], 201);
        } catch (ValidationException $e) {
            $errors = $e->validator->errors()->getMessages();
        
            return response()->json(['errors' => $errors, 'message' => 'The provided data was invalid.'], 422);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Database error: ' . $e->getMessage(), 'message' => 'There was an issue with the database. Please try again later.'], 500);
        } catch (Exception $e) {
            return response()->json(['error' => 'An unexpected error occurred: ' . $e->getMessage(), 'message' => 'An unexpected error occurred. Please try again later.'], 500);
        }
    }



    /**
     * Login user and create token
     */
    public function login(LoginRequest $request): JsonResponse
    {
        try {
            $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

            $user = User::where($loginField, $request->login)->first();

            // Check if the user exists and if the password is correct
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'login' => ['The provided credentials are incorrect.'],
                ]);
            }

            $token = $user->createToken('token')->plainTextToken;

            // Return the token in the response
            return response()->json([
                'token' => $token,
                'message' => 'logged in successfully.',
                'token_type' => 'Bearer',
                'user' => $user
            ], 200);
        } catch (ValidationException $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        } catch (Exception $e) {
            // Handle unexpected errors
            return response()->json(['error' => 'An unexpected error occurred: ' . $e->getMessage()], 500);
        }
    }



    /**
     * Logout user (Revoke the token)
     */
    public function logout(Request $request)
    {
        return response()->json($request->user());
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Token revoked']);
    }

    public function update(Request $request)
    {
        try {
            $user = Auth::user();

            $user->fullname = $request->input('fullname', $user->fullname);
            $user->email = $request->input('email', $user->email);

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            if ($request->hasFile('passport')) {
                $passport = $request->file('passport');
                $filename = time() . '_' . $passport->getClientOriginalName();
                $path = $passport->move(public_path('uploads/passports'), $filename);
                $user->passport = 'uploads/passports/' . $filename;
            }

            $user->save();

            return response()->json(['message' => 'User updated successfully.', 'user' => $user], 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'An unexpected error occurred: ' . $e->getMessage()], 500);
        }
    }
}