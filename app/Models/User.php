<?php

namespace App\Models;

use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Filament\Models\Contracts\HasTenants;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements FilamentUser, HasName, HasTenants
{

    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'avatar',
        'name',
        'hr',
        'first_name',
        'last_name',
        'birth_date',
        'email',
        'password',
	    'first_work_day',
        'status'
    ];

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    //tenants
    public function getTenants(Panel $panel): Collection
    {
        return $this->teams;
    }
    
    public function teams(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }
 
    public function canAccessTenant(Model $tenant): bool
    {
        return $this->teams->contains($tenant);
    }


    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }



    /*
    public function role(): BelongsTo
    {
        return $this->BelongsTo(Role::class);
    }
    */
}
