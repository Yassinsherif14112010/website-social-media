<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::with('user')
            ->when($request->search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function home(Request $request)
    {
        $posts = Post::with('user')
            ->when($request->search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10);

        return view('home', compact('posts'));
    }

    public function create()
    {
        $users = User::pluck('name', 'id')->toArray();
        return view('posts.add', compact('users'));
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'title'       => ['required', 'string', 'min:3', 'max:255'],
        'description' => ['required', 'string', 'min:10'],
        'user_id'     => ['required', 'exists:users,id'],
        'image'       => ['required','image','mimes:jpg,png,jpeg,svg,gif,webp'],
    ]);

    $imagePath = $request->file('image')->store('posts_images', 'public');
    
    $validatedData['image'] = $imagePath;
    
    Post::create($validatedData);


    return redirect()->route('posts.index')->with('success', 'Post created successfully!');
}

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $users = User::pluck('name', 'id')->toArray();
        return view('posts.edit', compact('post', 'users'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title'       => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:10'],
            'user_id'     => ['required', 'exists:users,id']
        ]);

        $post->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }
}

