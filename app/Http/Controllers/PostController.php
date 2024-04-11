<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('post.index');
    }
    public function store(Request $request): RedirectResponse{
        $validated = $request->validate([

        'content' => 'required|string|max:255',//mettre content à message

    ]);



    $request->user()->post()->create($validated);



    return redirect(route('post.index'));} 
}
