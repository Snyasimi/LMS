<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials))
        {
            $req->session()->regenerate();

            return redirect()->intended('dashboard');
        }
    }

    public function sign_up(SignUpRequest $validated_req,Request $req)
    {

         if ($req->method() == 'get')
         {
            return view('Auth.SignUp');
         }

         $validated = $validated_req->validated();

          $user = new User;

          $user->FirstName = $validated['FirstName'];
          $user->LastName = $validated['LastName'];
          $user->Email = $validated['Email'];
          $user->Campus = $validated['Campus'];
          $user->Course = $validated['Course'];
          $user->Password = bcrypt($validated['Confirm_password']);

          $user->save();

          Auth::login($user);
          return redirect()->route('dashboard');

        
    }

}
