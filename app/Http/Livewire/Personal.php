<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\App;
use App\Models\Employee;
use Livewire\WithFileUploads;

class Personal extends Component
{

    use WithFileUploads;
    public $first_name;
    
    public $last_name;
    
    public $birth_date;

    public $place_of_birth;

    public $pesel;

    public $martial_status_id;

    public $citizenship;

    public $email;
    
    public $telephone;

    public $street;

    public $number;

    public $code;

    public $city;

    public $photo1;

    public $photo2;

    public $policy;

    public $inputs;




    protected $rules = [
        'first_name'    => 'required',
        'last_name'     => 'required',
        'birth_date'    => 'required|date',
        //'email'         => 'required|email',
        'code'          => 'required',

        'city'          => 'required',
        'number'        => 'required',
        'street'        => 'required',
        'policy'        => 'accepted'
    ];

    public function mount($lang)
    {
        App::setLocale($lang);
        $this->fill(['inputs' => collect([['email' => '']]),]);

    }

    public function addInput()
    {
        $this->inputs->push(['email' => '']);
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
        return view('livewire.personal.index')->layout('layouts.user');
    }

}
