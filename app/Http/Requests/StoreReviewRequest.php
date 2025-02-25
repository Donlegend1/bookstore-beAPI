<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'required|string|max:255',
            'book_id' => 'required|integer|exists:books,id',
            'review_by' => 'required|integer|exists:users,id',
            'rating' => 'required|integer|min:1|max:5',
        ];
    }
}