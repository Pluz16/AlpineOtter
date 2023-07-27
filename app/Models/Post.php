<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'photo',
        'user_id',
    ];

    // Definisci la relazione con l'utente
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
