<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use App\Models\Employee;


class Apply extends Component
{

    public $first_name;
    
    public $last_name;
    
    public $birth_date;
    
    public $email;
    
    public $telephone;

    public $policy;


    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'birth_date' => 'required|date',
        'email' => 'required|email',
        'policy' => 'accepted'
    ];

    public function mount($lang)
    {
        App::setLocale($lang);
    }

    public function messages()
    {
        return 
        [
            'email.required' => __('apply.email.required'),
            'first_name.required' => __('apply.first_name.required'),
            'last_name.required' => __('apply.last_name.required'),
            'birth_date.required' => __('apply.birth_date.required'),
            'email.required' => __('apply.email.required'),
            'email.email' => __('apply.email.email'),
            'policy.accepted' => __('apply.policy.accepted')
        ];
    }

    
    public function submit()
    {
        $validatedData = $this->validate();
        Employee::Create($validatedData);

        session()->flash('success',__('apply.form.submited'));
        
        $this->reset();

    }

    public function render()
    {   
        return view('livewire.apply')->layout('layouts.user');
    }

}
