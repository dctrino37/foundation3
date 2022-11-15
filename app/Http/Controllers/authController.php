<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class authController extends Controller
{
    public function __construct(User $User)
    {
        $this->user = $User;
    }
    public function logout()
    {

        $user = Auth::user();

        $user->logged_in = NULL;

        $user->save();

        Auth::logout();
        

        return redirect('/login')->with('success', 'You have been logged out successfully');
    }
    public function login()
    {
        if (Auth::check()) {
            // return redirect('admin/dashboard');
            return redirect('/');
        }

        return view('admin.login');
    }

    public function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $data = [
            'email' => $email,
            'password' => $password
        ];

        if (Auth::attempt($data)) {
            return redirect('dashboard');
        } else {
            return back()->with('error', 'Wrong Credentials');
        }
    }
}
