<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\Book_issuing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $user = User::with('book_issued')->findorfail(Auth::user()->User_id);

        return view('Users.index',['User' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SignUpRequest $request)
    {
        $validated = $request->validated();
        $user = new User();
        $user->FirstName = $validated['FirstName'];
        $user->LastName = $validated['LastName'];
        $user->email = $validated['Email'];
        $user->RegNo = $validated['RegNo'];
        $user->Campus = $validated['Campus'];
        $user->Course = $validated['Course'];
        $user->password = bcrypt($validated['Confirm_password']);
        $user->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($user)
    {
        $user = User::with('book_issued')->findOrFail($user);

        $BookLost = Book_issuing::where('User_id',$user)->where('Book_status','Lost')->count();

        return view('Users.show',['User' => $user,'BooksLost' => $BookLost]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('Users.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        return view('Users.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return view('Users.index');
    }
}
