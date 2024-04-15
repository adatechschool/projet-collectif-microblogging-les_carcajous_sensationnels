<?php namespace App\Models;
//Le modèle de fichier utilisé par Eloquent 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// création d’une classe pour la partie texte des posts
class Post extends Model
{
    use HasFactory;
// permet de poster du contenu uniquement si l’utilisateurice est connecté·e
    protected $fillable = ['content'];

    public function user(): BelongsTo

    {
// lien avec le user
        return $this->belongsTo(User::class);

    }
}
