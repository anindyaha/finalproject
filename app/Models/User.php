<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
use Cviebrock\EloquentSluggable\Sluggable;
=======
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens, HasFactory, Notifiable, sluggable;
=======
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
<<<<<<< HEAD
        'slug',
        'password',
        'phone',
        'address',
        'role_id'
    ];

    public $timestamps = false;

=======
        'password',
        'phone',
        'address',
    ];

>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

<<<<<<< HEAD
    // protected $attributes = [
    //     'role_id' => 2
    // ];

    public function sluggable(): array{
        return[
            'slug' => [
                'source' => 'username'
            ]
            ];
    }
    
=======
    protected $attributes = [
        'role_id' => 2
    ];
>>>>>>> 8677526cd426ffce45cd3ac5b0174d4914a20555
}
