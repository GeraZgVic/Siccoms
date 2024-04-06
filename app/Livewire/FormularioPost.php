<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;
use App\Models\Articles;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class FormularioPost extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $article;

    #[Validate('required')]
    public $description;

    #[Validate('required|image|max:1024')]
    public $image;


    public function save() {

        $datos = $this->validate();

        // Almacenar imagen con nombre único
        $image = $this->image->store('public/blog/');

        $datos['image'] = str_replace('public/blog/', '', $image);

        // GUARDAR EN LA BD
        // Obtener usuario autenticado
        $user = auth()->user();
        // Crear nuevo post y asignar datos
        $post = new Posts();
        $post->title = $this->title;
        $post->article_id = $this->article;
        $post->image = $datos['image'];
        $post->description = $this->description;
        // Asignar el ID del usuario al post
        $post->user_id = $user->id;
        // Guardar post
        $post->save();

        return redirect()->route('dashboard')->with('success', 'Post creado exitosamente');        
    }

    public function render()
    {
        $articulos = Articles::all();
                
        return view('livewire.formulario-post', [
            'articulos' => $articulos
        ]);
    }
}
