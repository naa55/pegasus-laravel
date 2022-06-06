<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create() {
        return view('posts.register');
    }

    public function store() {
       // dd(request()->all());

       $attr = request()->validate([
           'name'=>'required',
           'email'=>'required',
           'password' => 'required|confirmed'
       ]);
       $attr['password'] = bcrypt($attr['password']);
       $user = User::create($attr);
       auth()->login($user);

       return redirect('/home');
    }
}
