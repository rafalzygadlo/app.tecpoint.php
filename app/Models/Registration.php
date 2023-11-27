<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'flat_id',
        'user_id',
        'street',
        'house_number',
        'flat_number',
        'code',
        'city'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
