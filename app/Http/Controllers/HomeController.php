<?php

namespace App\Http\Controllers;

use App\Models\Posts;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Posts::paginate(3);
        // Obtener el primer post y eliminarlo de la colleción
        $firstPost = $posts->shift();

        return view('home', [
            'firstPost' => $firstPost,
            'posts' => $posts
        ]);
    }
}
