<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tile extends Component
{

    public $title;
    public $content;
    public $href;

    public function render()
    {
        return view('tile')->layout('layouts.user');
    }

}
