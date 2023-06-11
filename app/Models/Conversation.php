<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;

     protected  $fillable=[
         'label' , 'originator' ,'last_message_id' ,
         'type' , 'password' , 'user_id'
     ];


    /**
     * {Find out who started the conversation }   foreignId => user_id
     */

    public function user() :BelongsTo
    {

        return $this->belongsTo(User::class,'user_id','id');

    }


    /**
     * { View participating members }   foreignId => conversation_id , user_id
     */

    public function participant() :BelongsToMany
    {

        return $this->belongsToMany
        (User::class,'participants','conversation_id','user_id')
            ->withPivot([
                'role' , 'joined_at'
            ]);

    }



    /**
     * {View the last message sent in a conversation }   foreignId => last_message_id
     */

    public  function messages() :HasMany
    {
        return $this->hasMany(Messages::class,'conversation_id','id')
        ;
    }

    /**
     * {View the last message sent in a conversation }   foreignId => last_message_id
     */

    public function last_message() :BelongsTo
    {

        return $this->belongsTo(Messages::class,'last_message_id','id')
            ->withDefault("لايوجد رسائل");

    }
}
