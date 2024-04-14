<?php

namespace App\Livewire\Posts\Components;

use Livewire\Component;
use App\Models\Post;

class Detalles extends Component
{
    public $search = '';
    /* public $posts; */
    //mount es un metodo de livewire
    public function mount()
    {
        // $this->posts = Post::orderBy('id', 'Desc')->paginate(2);
    }
    public function render()
    {
        //con este codigo se filtra  para que solo muestre los datos que se anotaron en este caso  se filtra de 2 columnas
        $detalles = post::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('content', 'like', '%' . $this->search . '%')
            ->orderby('id', 'desc')
            ->get();

        return view('livewire.posts.components.detalles', ['detalle' => $detalles]);

        /* para  filtrar pero por una  sola columna
        $detalles = post::where('title', 'like', '%' . $this->search . '%')->get(); */
    }
}
