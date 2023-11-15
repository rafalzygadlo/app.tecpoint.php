<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'flat_id',
        'active',
        'object_id',
        'street',
        'number',
        'code',
        'city'

    ];


    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}