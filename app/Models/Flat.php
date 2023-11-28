<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


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

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}

