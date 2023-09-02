<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function new_user()
    {
        return view('Auth.SignUp');
    }
    

    public function sign_up(SignUpRequest $validated_req)
    {

        
        //  if ($req->isMethod('get'))
        //  {
        //     return view('Auth.SignUp');
        //  }
        

         $validated = $validated_req->validated();
         //dd($validated_req);

          $user = new User();
        //$user->User_id = 
          $user->FirstName = $validated['FirstName'];
          $user->LastName = $validated['LastName'];
          $user->Email = $validated['Email'];
          $user->RegNo = $validated['RegNo'];
          $user->Campus = $validated['Campus'];
          $user->Course = $validated['Course'];
          $user->password = bcrypt($validated['Confirm_password']);
   //dd($user->User_id);

         $user->is_admin = false;
          $user->save();

          Auth::login($user);
          return "User added ";//redirect()->route('Book.index');

        
    }
    

    public function login()
    {
        return view('Auth.Login');
    }
    public function Login_action(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials))
        {
            $req->session()->regenerate();
            if(Auth::user()->is_admin)
            {
                return redirect()->intended(route('AdminHome'));
            }

            return redirect()->intended(route('User.index'));
        }
        return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->onlyInput('email');
    
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');

    }

}
