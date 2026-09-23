<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class GuestController extends Controller
{
    public function show(){

        $posts = blog::select('id', 'title', 'uploaded_at', 'content')->paginate(10);
        return view('blog', compact('posts'));
    }

    public function showBlog($id){
        $data = blog::findOrFail($id);

        return view('showBlog', compact('data'));
    }

}
