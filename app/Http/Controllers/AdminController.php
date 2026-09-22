<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\blog;

class AdminController extends Controller
{   
    public function login(Request $request){
        $creds = $request->validate([
            'id' => ['required', 'numeric'],
            'password' => ['required']
        ]);

        if(Auth::attempt($creds, $request->remember)){
            $request->session()->regenerate();

            return redirect()->intended(route('views.admin'));
        }

        return back()->withErrors([
            'password' => 'not found in our record'
        ])->onlyInput('email');
    }
    public function display(){
        $posts = blog::all();

        
        return view('admin', compact('posts'));
    }

    public function add(Request $request){

        $data = $request->validate([
            'title' => "string|required|max:254",
            'content' => "string",
        ]);

        blog::create(array_merge($data,
        [
            'uploaded_at' => now(),
            'user_id' => auth()->id()
        ]
        ));

        return back()->with('success', 'Post created successfully.');
    }

    
}
