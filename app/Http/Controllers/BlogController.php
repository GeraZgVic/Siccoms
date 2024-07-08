<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Articles;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Obtener todos los posts de la base de datos paginados
        $posts = Posts::orderBy('created_at', 'desc')->paginate(7);

        // Obtener el primer post y eliminarlo de la colección de $posts
        $firstPost = $posts->shift();

        return view('blog', [
            'posts' => $posts,
            'firstPost' => $firstPost
        ]);
    }

    public function show($id)
    {
        $post = Posts::find($id);

        return view('blog.show',[
                'post' => $post
            ]
        );
    }

    public function edit($id)
    {
        // Recuperar el Post que se va a editar
        $post = Posts::find($id);
        $articulos = Articles::all();

        // Devolver la vista del forumlario de edición junto con los datos del post
        return view('auth.edit', [
            'post' => $post,
            'articulos' => $articulos,
            'postId' => $id
        ]);
    }

    public function destroy($id)
    {
        try {
            $post = Posts::findOrFail($id);
            // Eliminar post
            $post->delete();

            // Redirigir con un mensaje de éxito
            return redirect()->back()->with('success', '!El post ha sido eliminado exitosamente!');
        } catch (\Exception $e) {
            // Manejar cualquier excepcion que ocurra, por ejemplo, si el post no se encuentra
            return redirect()->back()->with('error', 'No se pudo eliminar el post: ' . $e->getMessage());
        }
    }
}
