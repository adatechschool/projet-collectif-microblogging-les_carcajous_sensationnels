<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
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

     /**

     * Show the form for editing the specified resource.

     */
     public function edit(Post $post): View {
         Gate::authorize('update', $post);

 

        return view('post.edit', [

            'post' => $post,

        ]);
     }

       /**

     * Update the specified resource in storage.

     */
       public function update(Request $request, Post $post): RedirectResponse {
            Gate::authorize('update', $post);

 

        $validated = $request->validate([

            'content' => 'required|string|max:255',

        ]);

 

        $post->update($validated);

 

        return redirect(route('post.index'));
       }
}
