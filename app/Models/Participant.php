<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Pivot
{
    use HasFactory  ;

    protected $table = "participants" ;

    public $timestamps = false ;

    protected $casts = ['joined_at' => 'datetime'];


   public function user() {
       return $this->belongsTo(User::class ,'user_id','id');
   }

    public function getPermissionAttribute()
    {
        return $this->attributes['role'];
    }

}
