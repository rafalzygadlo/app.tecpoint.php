<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;


class Apply extends Component
{

    public $first_name;
    
    public $last_name;
    
    public $birth_date;
    
    public $email;
    
    public $telephone;


    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'birth_date' => 'required',
        'email' => 'required|email'
    ];

    public function messages()
    {
        return [
            'email.required' => __('apply.email.required'),
            'first_name.required' => __('apply.first_name.required'),
            'last_name.required' => __('apply.last_name.required'),
            'email.required' => __('apply.email.required'),
            'email.email' => __('apply.email.email')
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    
    public function submit()
    {
        $this->validate();
        

    }

    public function render()
    {
        App::setLocale('pl');
        return view('livewire.apply')->layout('layouts.user');
    }

}
