<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);

        return view('posts.index', compact('posts'));
    }

    public function create() {
        if (!Auth::check()) {
            return redirect()->route('posts.index');
        }

        return view('posts.create');
    }

    public function edit(Post $post) {
        if (!Auth::check()) {
            return redirect()->route('posts.index');
        }

        return view('posts.create', compact('post'));
    }

    public function update(Request $request, $id) {
        if (!Auth::check()) {
            return redirect()->route('posts.index');
        }

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('posts.show', $post);
    }

    public function store() {
        if (!Auth::check()) {
            return redirect()->route('posts.index');
        }

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::create(request(['title', 'body']));

        return redirect()->route('posts.show', $post);
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function destroy($id) {
        if (!Auth::check()) {
            return redirect()->route('posts.index');
        }

        Post::destroy($id);

        return redirect()->route('posts.index');
    }
}
