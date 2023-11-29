<?php

namespace App\Models;

use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class User extends Authenticatable implements FilamentUser, HasName
{

    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
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
     * @var array<string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];
    
    /**
     * field filters
     * @var array<string>
     */
    protected $filters = 
    [
        'author_id', 
        'category_id'
    ];
    
    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function filter($request)
    {
        print_r($request);
        foreach(self::$filters as $field)
        {
            if(!empty($request->$field))
            {
                $query = self::where($field, '=', $request->$field);
            }
        }

        return $query;
    }


    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function addresses(): MorphToMany
    {
        return $this->morphToMany(Address::class, 'addressable', 'addressables');
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
