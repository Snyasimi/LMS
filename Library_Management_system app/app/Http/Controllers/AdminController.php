<?php

namespace App\Http\Controllers;

use App\Models\{Books,Book_issuing,User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        $newbooks = Books::limit(10)->lazy();
        $data = [
            'Lost Books' => Book_issuing::where('Books_status','Lost')->count(),
            'Borrowed Books' => Book_issuing::where('Books_status','Lost')->count(),
            'Total Books' => Books::count()
        ];


        return view('AdminViews.index',[]);
    }

    public function book_requests()
    {

        $requested_books = Book_issuing::with(['borrower','book_borrowed'])->where('Book_status','Requested')->lazy();
        return view('AdminViews.Book_requests',[
            'requests' => $requested_books
        ]);
    }

    

    public function return_book($book_issue_id)
    {
        $book = Book_issuing::findorfail($book_issue_id);
        $book->Book_status = 'Returned';
        $book->save();

      return redirect()->back()->with(['message' => 'Book returned']);  
    }

    public function search()
    {

        return view('AdminViews.search_user');
    }
    public function search_user(Request $request)
    {
        

        $validate = $request->validate([
            'data' => ['required','max:255']
        ]);
        

        $user = User::where('FirstName','like','%'.$validate['data'].'%')
                        ->orWhere('LastName','like','%'.$validate['data'].'%')
                        ->orWhere('RegNo','like','%'.$validate['data'].'%')
                        ->lazy();
                        //dd($user);

        // if($books == false)
        // {
        //     $message = "The book is not avalable now";
        // }

        return view('AdminViews.search_user',['users' => $user]);

    }

    public function borrowed_books()
    {
        $borrowed_books = Book_issuing::with(['borrower','book_borrowed'])->where('Book_status','Borrowed')->lazy();
        return view('AdminViews.Borrowed_books',[
            'borrowed_books' => $borrowed_books
        ]);
    }

    public function approve_book_request($request_id)
    {

        $request = Book_issuing::with('book_borrowed')->findorfail($request_id);

        DB::transaction(function() use($request){

        $book_quantity = $request->book_borrowed->book_details->Quantity;
        $request->book_borrowed->book_details->Quantity = $book_quantity - 1;

        $request->Book_status = 'Borrowed';
        $request->Return_date = now()->addWeeks(2);
        $request->save();

        });

    }

    
}
