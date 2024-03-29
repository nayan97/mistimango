<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Phone;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
  
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function posts() {
  
        return $this->hasMany(Post::class);
     
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
//     protected $fillable = [
//         'name',
//         'email',
//         'cell',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var array<int, string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//         'two_factor_recovery_codes',
//         'two_factor_secret',
//     ];

//     /**
//      * The attributes that should be cast.
//      *
//      * @var array<string, string>
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];

//     /**
//      * The accessors to append to the model's array form.
//      *
//      * @var array<int, string>
//      */
//     protected $appends = [
//         'profile_photo_url',
//     ];


   /**
     * Get the phone associated with the user.
     */
    public function phone()
    {
        return $this->hasOne(Phone::class);
    }

}
