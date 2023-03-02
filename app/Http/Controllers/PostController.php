<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post; //llamar al model de alumno
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $datos['posts'] = Post::paginate(10);

        return view('post.index', $datos);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('status');
        $post->user_id = auth()->user()->id; // El ID del usuario autenticado
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

    //public function userPosts(User $
}