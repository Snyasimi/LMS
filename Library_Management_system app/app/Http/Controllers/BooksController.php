<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddBookRequest;
use App\Models\Books;
use App\Models\Book_details;
use App\Models\Book_issuing;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Books = Books::with('book-details')->lazy();

        return view('Books.index',['Books' => $Books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Books.create',[
            'categories' => Category::lazy() 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddBookRequest $request)
    {
        //dd($request);
        $validated = $request->validated();
        DB::transaction(function() use($validated){

        
        $book = new Books();
        $book_details = new Book_details();

        $book->Author = $validated['Author'];
        $book->Title = $validated['BookName'];
        $book->ISBN = $validated['ISBN'];
        $book->Category = $validated['Category'];
        $book->Description =$validated['BookDescription'];

        $book->save();

        $book_details->Quantity = $validated['NumberOfCopies'];
        $book_details->Call_number = $validated['CallNumber'];
        $book_details->Total = $validated['NumberOfCopies'];

        $book->book_details()->save($book_details);
        });

        return redirect()->back()->with(['message' => 'Book Added']);

        
    }

    /**
     * Display the specified resource.
     */
    public function show($book)
    {
        $book = Books::with('book_details')->findorfail($book);

        return view('Books.show',['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books,$id)
    {
       # $book = $books;
        $book = Books::with('book_details')->findorfail($id);
        
        return view('Books.edit',
        [
            "book" => $book,
            'categories' => Category::lazy()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddBookRequest $request, $Book)
    {
        //
        //dd($request);
        $book = Books::findorfail($Book);

        DB::transaction(function() use ($request, $book){

            $validated = $request->validated();
            // $book = new Books();
             $book_details = $book->book_details;
    
            $book->Author = $validated['Author'];
            $book->Title = $validated['BookName'];
            $book->ISBN = $validated['ISBN'];
            $book->Category = $validated['Category'];
            $book->Description =$validated['BookDescription'];
    
            $book->save();
    
            $book_details->Quantity = $validated['NumberOfCopies'];
            $book_details->Call_number = $validated['CallNumber'];
            $book_details->Total = $validated['NumberOfCopies'];
    
            $book_details->save();
            });

        return redirect()->back();
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
                'Book_id' => ['required','id']
            ]
            );

            #Query the book
            $book = Books::where('id',$validate['Book_id'])->get();
            $user = Auth::user()->id;

            $book_issue = new Book_issuing();

            DB::transaction(function() use($book_issue,$user,$book){

                $book_issue->User_id = $user;
                $book_issue->Book_id = $book->id;
                $book_issue->Book_status = 'Borrowed';
                $book_issue->return_date = now()->addWeeks(2);
                $book_issue->save();


            });

            #add borrower to table 

            return redirect()->back()->with(['Message' => 'Book requested, visit your librarian for further assistance ']);
    }


    public function request_book(Request $request,$book)
    {

        $user = $request->user()->User_id;
        $book = Books::findorfail($book);
        $book_request = new Book_issuing();

        DB::transaction(function() use($book_request,$user,$book){

            $book_request->User_id = $user;
            $book_request->Book_id = $book->id;
            $book_request->Book_status = 'Requested';
            $book_request->return_date = now()->addWeeks(2);
            $book_request->save();


        });
        
        return redirect()->back()->with(['message' => 'Book requested, visit your librarian for further assistance']);



    }
    public function find_book()
    {
        $books = Books::with('book_details')->lazy();

        if(Auth::user()->is_admin)
        {
            return view('AdminViews.search_book',['books' => $books]);
        }

        return view('Users.search_book',['books' => $books]);
    }
    public function search_book(Request $request)
    {

        $validate = $request->validate([
            'BookName' => ['required']
        ]);

        $books = Books::where('Title','like','%'.$validate['BookName'].'%')->lazy();

        // if($books == false)
        // {
        //     $message = "The book is not avalable now";
        // }

        if(Auth::user()->is_admin)
        {
            return view('AdminViews.search_book',['books' => $books]);
        }

        return view('Users.search_book',['books' => $books]);

    }
}
