<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
        'article_id'
    ];

    // una publicación pertenece a un usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Una publicación pertenece a un usuario
    public function article() {
        return $this->belongsTo(Articles::class);
    }
}
