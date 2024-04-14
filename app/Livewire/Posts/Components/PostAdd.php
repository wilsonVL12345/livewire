<?php

namespace App\Livewire\Posts\Components;

use App\Models\Post;
use Livewire\Component;
//se tiene que agregar esta libreria para poner hacer la validacion
use Livewire\Attributes\Validate;

class PostAdd extends Component
{
    #[Validate('required', message: 'Escribe un titulo')]
    #[Validate('min:3', message: 'Al menos 3 caracteres')]
    public $title;

    #[Validate('required', message: 'Escribe un contenido')]
    #[Validate('min:3', message: 'El contenido tiene que tener mas de 3 caracteres ')]
    public $content;

    public function mount()
    {
        /*  $this->title = 'hola wils V Code'; */
    }

    public function render()
    {
        return view('livewire.posts.components.post-add');


        /* return <<<'HTML'
       <div>
           <h1>hola a todos desde postadd .php</h1>
       </div>
       HTML; */
    }
    public function create()
    {
        $validated = $this->validate([
            'title' => 'required|min:3',
            'content' => 'required|min:3',
        ]);

        Post::create($validated);
        $this->reset(['title', 'content']);

        //emvia un dispatch  con el nombre de post created para poder actualizar los datos que se muestra
        $this->dispatch('post-created');
    }
}
