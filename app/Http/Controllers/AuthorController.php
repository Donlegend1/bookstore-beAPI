<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::with('books')->get();

        return response()->json(['authors' => $authors], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAuthorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAuthorRequest $request)
    {
        $author = new Author();
        $author->fullname = $request->fullname;
        $author->biography = $request->biography;

        // Handle file upload for passport
        if ($request->hasFile('passport')) {
            $passport = $request->file('passport');
            $filename = time() . '_' . $passport->getClientOriginalName();
            $path = $passport->move(public_path('uploads/authors'), $filename);
            $author->passport = 'uploads/authors/' . $filename;
        }

        // Save the author
        $author->save();

        // Optionally, you can return the saved author data as a response
        return response()->json(['message' => 'Author created successfully', 'author' => $author], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        $author->load(['books']);
        return response()->json(['author' => $author], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAuthorRequest  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAuthorRequest $request, Author $author)
    {
      
        $author->fullname = $request->fullname;
        $author->biography = $request->biography;

        // Handle file upload for passport
        if ($request->hasFile('passport')) {
            $passport = $request->file('passport');
            $filename = time() . '_' . $passport->getClientOriginalName();
            $path = $passport->move(public_path('uploads/authors'), $filename);
            $author->passport = 'uploads/authors/' . $filename;
        }

        $author->save();

        return response()->json(['message' => 'Author updated successfully', 'author' => $author], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        // Check if the author is associated with any books
        $books = Book::where('author_id', $author->id)->exists();

        if ($books) {
            return response()->json(['message' => 'Author cannot be deleted because they are associated with books'], 400);
        }

        // Delete the author
        $author->delete();

        return response()->json(['message' => 'Author deleted successfully'], 200);
    }
}