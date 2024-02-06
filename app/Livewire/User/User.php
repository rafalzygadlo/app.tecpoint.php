<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;

    public function sortBy($columnName) 
    {

        $this->sortDirection = 'asc';

        $this->sortColumnName = $columnName;

    }
    
    public function render()
    {
        //$users = \App\Models\User::orderBy($this->sortColumnName,$this->sortDirection)->paginate(50);
        //$count = \App\Models\User::count();
        
        return view('livewire.user.index')->layout('layouts.user');
    }

}
