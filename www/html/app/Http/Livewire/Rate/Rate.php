<?php

namespace App\Http\Livewire\Rate;

use Livewire\Component;

class Rate extends Component
{

    public function render()
    {
        return view('livewire.rate.index')
                ->layout('layouts.user');
    }

}
