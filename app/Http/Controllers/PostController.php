<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

class PostController extends Controller
{

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required',
        ]);

        $filename = time() . '.' . $request->path->extension();

        $path = $request->file('path')->storeAs(
            'images',
            $filename,
            'public'
        );

        $post = new Post();
        $post->path = $path;
        $post->user_id = auth()->user()->id;
        $post->save();

        return view('home');
    }




}
