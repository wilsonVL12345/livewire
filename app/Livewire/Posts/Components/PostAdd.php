<?php

namespace App\Livewire\Posts\Components;

use Livewire\Component;

class PostAdd extends Component
{

    public $title;

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
        dd('hola desde el controlador de livewire');
    }
}
