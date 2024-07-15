<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBooksRequest;
use App\Http\Requests\UpdateBooksRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with(['author', 'reviews.user'])->get();
        return response()->json(['books' => $books], 200);
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
     * @param  \App\Http\Requests\StoreBooksRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBooksRequest $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author_id = $request->author;
        $book->description = $request->description;
        $book->rating = $request->rating;

        // Handle file upload for cover image
        if ($request->hasFile('coverImageUrl')) {
            $coverImage = $request->file('coverImageUrl');
            $filename = time() . '_' . $coverImage->getClientOriginalName();
            $path = $coverImage->move(public_path('uploads/books'), $filename);
            $book->coverImageUrl = 'uploads/books/' . $filename;
        }

        $book->save();
        return response()->json(['message' => 'Book created successfully', 'book' => $book], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book->load(['author', 'reviews.user']);
        return response()->json(['book' => $book], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBooksRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
        $book->title = $request->title;
        $book->author_id = $request->author;
        $book->description = $request->description;
        $book->rating = $request->rating;

        // Handle file upload for cover image
        if ($request->hasFile('coverImageUrl')) {
            $coverImage = $request->file('coverImageUrl');
            $filename = time() . '_' . $coverImage->getClientOriginalName();
            $path = $coverImage->move(public_path('uploads/books'), $filename);
            $book->coverImageUrl = 'uploads/books/' . $filename;
        }

        $book->save();

        return response()->json(['message' => 'Book updated successfully', 'book' => $book], 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
}