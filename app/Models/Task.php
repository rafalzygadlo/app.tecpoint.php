<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;


    protected $casts = [
        'attachments' => 'array',
    ];

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'creator_id',
        'title',
        'info',
        'begin',
        'attachments',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function creator(): BelongsTo
    {
        return $this->BelongsTo(User::class,'creator_id');
    }

    public function flat(): BelongsTo
    {
        return $this->BelongsTo(Flat::class);
    }
    
}
