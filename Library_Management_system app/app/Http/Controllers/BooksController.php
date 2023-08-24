<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        return view('Books.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        $book = 'book';
        return view('Books.edit')->with(['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }


    public function borrow_book(Request $req,Books $book)
    {
        $validate = $req->validate(
            [
                'Book_id' => ['required','uuid']
            ]
            );

            #Query the book

            #add borrower to table 

            return back()->with(['Message' => 'Book requested, visit your librarian for further ']);
    }
}
