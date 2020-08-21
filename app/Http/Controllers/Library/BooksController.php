<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Library\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.library.book.books', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.library.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->description = $request->description;
        $book->type = $request->type;
        $book->total_quantity = $request->quantity;
        $book->available = $request->available;
        $book->rack = $request->rack;
        $book->row = $request->row;
        $book->col = $request->col;
        $book->save();

        return redirect()->route('library.book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('admin.library.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.library.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->title = $request->title;
        $book->description = $request->description;
        $book->total_quantity = $request->quantity;
        $book->available = $request->available;
        $book->rack = $request->rack;
        $book->row = $request->row;
        $book->col = $request->col;
        $book->update();

        return redirect()->route('library.book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
