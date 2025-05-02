<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use SoftDeletes, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'avatar',
        'firstname',
        'lastname',
        'middlename',
        'age',
        'birthdate',
        'birthplace',
        'address',
        'bio',
        'username',
        'email',
        'email_verified_at',
        'phone',
        'phone_verified_at',
        'password',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'age' => 'integer',
            'birthdate' => 'date',
            'birthplace' => 'array',
            'address' => 'array',
            'email_verified_at' => 'datetime',
            'phone_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
            'is_accessible' => 'boolean',
            'is_terms_accepted' => 'boolean',
        ];
    }

    public function getFullnameAttribute() {
        $getMiddleInitial = $this->middlename ? strtoupper(substr($this->middlename, 0, 1)) . '.' : '';
        return trim("{$this->firstname} {$getMiddleInitial} {$this->lastname}");
    }

    public function suspensions() {
        return $this->hasMany(Suspension::class);
    }

    public function activeSuspension() {
        return $this->hasOne(Suspension::class)->where('is_active', true);
    }

    public function isSuspended(): bool {
        return $this->suspended_until && $this->suspended_until > now();
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
