<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
       //validate
       $validatedAttr= $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'password' => 'required|confirmed'

       ]);
       //create user
       $user = User::create($validatedAttr);

       //login
       Auth::login($user);
       return redirect('/');

    }
}
