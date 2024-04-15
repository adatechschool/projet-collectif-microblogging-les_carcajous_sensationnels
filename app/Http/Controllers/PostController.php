<!-- controleur http qui va prendre récupérer les requête et les retourner en réponse -->
<?php

namespace App\Http\Controllers;

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
}
