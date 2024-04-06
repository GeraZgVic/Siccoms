<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    // Un artículo puede tener múltiples posts asociados a él
    public function posts() {

        return $this->hasMany(Posts::class);
    }
}
