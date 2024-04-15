<?php namespace App\Http\Controllers;
//controleur http qui va prendre récupérer les requête et les retourner en réponse 
use Illuminate\Support\Facades\Gate;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PostController extends Controller
{
    // route pour afficher un formulaire et lister les posts
    public function index(): View
    {
        return view('post.index', [
            'post' => Post::with('user')->latest()->get(),
        ]);
    }
    // route utilisée pour sauvegarder les posts
    public function store(Request $request): RedirectResponse{
        // valide la data reçue et création du post avec les restrictions définies
        $validated = $request->validate([

        'content' => 'required|string|max:255',

    ]);


    // création du post si les conditions sont validées
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

        public function destroy(Post $post): RedirectResponse {
              Gate::authorize('delete', $post);

 

        $post->delete();

 

        return redirect(route('post.index'));
        }
}
