<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Messages extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
      'conversation_id' ,  'user_id' ,
        'body' ,'type','message_id'
    ];


    /**
     * {Find out who started the conversation }   foreignId => user_id
     */

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => __('The user does not exist')
        ]);
    }


    /**
     * {Responses to messages}   foreignId => message_id
     */

    public function parentMessage()
    {
        return $this->belongsTo(Messages::class, 'message_id')
            ->withDefault();
    }



}
