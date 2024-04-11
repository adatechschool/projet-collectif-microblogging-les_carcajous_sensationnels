<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('post.index', [
            'post' => Post::with('user')->latest()->get(),
        ]);
    }
    public function store(Request $request): RedirectResponse{
        $validated = $request->validate([

        'content' => 'required|string|max:255',//mettre content à message

    ]);



    $request->user()->post()->create($validated);



    return redirect(route('post.index'));} 
}
