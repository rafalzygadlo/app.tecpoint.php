<?php

namespace App\Http\Livewire\User;

use Illuminate\Database\Eloquent\Builder;
use App\Models\User;

class UserTableView
{
    protected $model = User::class;

    public function headers(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Created',
            'Updated'
        ];
    }

    public function row($model)
    {
        return [
            $model->first_name,
            $model->last_name,
            $model->updated_at
        ];
    }
}