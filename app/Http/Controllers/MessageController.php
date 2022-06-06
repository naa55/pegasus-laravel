<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public function index() {
        //dd(request('search'));
        //$messages = Message::latest();

        return view('posts.messages', [
            'messages' =>Message::latest()->filter(request(['search']))->paginate(3)->withQueryString()
        ]);
    }

    public function create() {
        return view('posts.contact');
    }
    public function store() {
        //dd(request()->all());
        $attributes =  request()->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        Message::create($attributes);
        return redirect('/');
    }

    public function show($id) {
        $message = Message::find($id);
        return view('posts.message',[
            'message' => $message
        ]);
    }

    public function destroy($id) {
         Message::destroy($id);
         return back();
    }


}
