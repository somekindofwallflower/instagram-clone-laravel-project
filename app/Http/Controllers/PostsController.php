<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{

    // The methods can be accessed only if user is authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image'   => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();
        //Get the authenticated user
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        return redirect('profiles/' . auth()->user()->id);

    }

    public function show(\App\Post $post) {
        //$post = Post::findOrFail($post);
        return view('posts.show', compact('post'));
    }
}



