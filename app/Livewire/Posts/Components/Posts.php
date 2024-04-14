<?php

namespace App\Livewire\Posts\Components;

use App\Models\Post;
use Livewire\Component;

use Livewire\WithPagination;

//esta libreria ayuda a escuchar es post created 
use Livewire\Attributes\On;

class Posts extends Component
{
    use WithPagination;
    /* public $posts; */
    //mount es un metodo de livewire
    public function mount()
    {
        // $this->posts = Post::orderBy('id', 'Desc')->paginate(2);
    }

    //escucha el post created para poder  actualizar y mostrar los datos ojo tambien tenemos que agrgar librerias
    #[On('post-created')]
    public function render()
    {
        $posts = Post::orderBy('id', 'Desc')->paginate(3);
        return view('livewire.posts.components.posts', ['posts' => $posts]);
    }
}
