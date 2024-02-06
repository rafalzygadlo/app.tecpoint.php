<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Address extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'street',
        'number',
        'zip',
        'city'
    ];
     
    public function users()
    {
        return $this->morphedByMany(User::class, 'addressable');
    }
    
    public function task()
    {
        return $this->morphedByMany(Task::class, 'addressable');
    }

}
