<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormularioEditPost extends Component
{
    public $postId;
    public $articulos;
    public $title;
    public $article;
    public $description;
    public $image;
    public $image_new;

    use WithFileUploads;

    protected $rules = [
        'title' => 'required',
        'article' => 'required',
        'description' => 'required',
        'image_new' => 'nullable|image|max:1024'
    ];


    public function mount($postId)
    {
        $this->postId = $postId;

        // Cargar los datos del post desde la base de datos
        $post = Posts::findOrFail($postId);

        // Asignar los valores del post a las propiedades del componente
        $this->title = $post->title;
        $this->article = $post->article_id;
        $this->description = $post->description;
        $this->image = $post->image;
    }

    public function editarPost()
    {
        try {
            $datos = $this->validate();
            // Si hay una nueva imagen
            if ($this->image_new) {
                // Retorna el nombre de la imagen pero con el 'public/blog'
                $imagen = $this->image_new->store('public/blog');
    
                // Retorna el nombre de la imagen pero sin el 'public/blog'
                $datos['image'] = str_replace('public/blog/', '', $imagen);
            }
            // Encontrar el post a editar
            $post = Posts::findOrFail($this->postId);
    
            $post->article_id = $datos['article'];
            $post->save(); // Guardar articulo
            
            // Actualizar los datos del post en la base de datos
            $post->update($datos);
            // Redireccionar a la vista de dashboard con un mensaje de éxito
            return redirect()->route('dashboard')->with('success', 'Post editado exitosamente');
        } catch (\Exception $e) {
            // Manejo de errores: redirigir de vuelta con un mensaje de error
            return redirect()->back()->with('error', 'Se produjo un error al editar el post: ' . $e->getMessage());
        }
    }


    public function render()
    {
        $post = Posts::find($this->postId);
        return view('livewire.formulario-edit-post', compact('post'));
    }
}
