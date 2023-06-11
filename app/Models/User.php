<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'description',
        'password',
    ];

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



    /**=================  { Relationships } ===========================*/
    /**================================================================*/


    /**
     * {View friend requests sent to a user}   foreignId => friend_id
     */

    public function conversations() :BelongsToMany
    {

        return $this->belongsToMany(Conversation::class,'participants','user_id','conversation_id')
            ->withPivot([
                'role' , 'joined_at'
            ]);
    }


    /**
     * {View friend requests sent to a user}   foreignId => friend_id
     */

     public function friends() :HasMany
     {

         return $this->hasMany(User::class,'friend_id','id');

     }





}
