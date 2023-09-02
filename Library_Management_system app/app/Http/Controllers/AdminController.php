<?php

namespace App\Http\Controllers;

use App\Models\{Books,Book_issuing,User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function home()
    {
        $books = Books::orderBy('created_at','asc')->lazy();
        $newbooks = $books->take(10);
        $Lost_Books = Book_issuing::where('Books_status','Lost')->count();
        $Borrowed_Books = Book_issuing::where('Books_status','Borrowed')->count();
        $Total_Books = Books::count();


        return view('AdminViews.index',[
            'Books' => $books,
            'LostBooks' => $Lost_Books,
            'BorrowedBooks' => $Borrowed_Books,
            'TotalBooks' => $Total_Books,
            'NewBooks' => $newbooks
        ]);
    }

    public function book_requests()
    {

        $requested_books = Book_issuing::with(['borrower','book_borrowed'])
                                        ->where('Book_status','Requested')
                                        ->orderBy('created_at','asc')->lazy();

        return view('AdminViews.Book_requests',[
            'requests' => $requested_books
        ]);
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
                        ->orderBy('FirstName')
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
        $borrowed_books = Book_issuing::with(['borrower','book_borrowed'])->where('Book_status','Borrowed')
                                        ->orderBy('created_at','asc')->lazy();
        return view('AdminViews.Borrowed_books',[
            'borrowed_books' => $borrowed_books
        ]);
    }

    public function approve_book_request($request_id)
    {

        $request = Book_issuing::with('book_borrowed')->findorfail($request_id);

        DB::transaction(function() use($request){

            $book_details = $request->book_borrowed->book_details;//->Quantity;        
            $book_details->decrement('Quantity',1);

            //$request->book_borrowed->book_details->Quantity = $book_quantity - 1;
            $request->Book_status = 'Borrowed';
            $request->Return_date = now()->addWeeks(2)->toFormattedDayDateString();
            $request->save();

        });

        return redirect()->back()->with(['message' => 'Book issued']);

    }

    public function return_book($request_id)
    {
        $book_issue = Book_issuing::with('book_borrowed')->findorfail($request_id);

        DB::transaction(function() use($book_issue){

            $book_details = $book_issue->book_borrowed->book_details;//->Quantity;
            $book_details->increment('Quantity',1);

        
            $book_issue->Book_status = 'Returned';
            $book_issue->save();

        });

      return redirect()->back()->with(['message' => 'Book returned']);  
    }

    
}
