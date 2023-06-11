<?php

namespace App\Traits;

use App\Models\Friendship;
use Illuminate\Support\Facades\Auth;

trait FriendsGetTrait
{

    public  function  GetFriend () {

        $user = Auth::user();

        $Friends = Friendship::with('user','friend')->where([
            ['status',1],
            ['user_id', $user->id],
        ])->orWhere('friend_id', $user->id)
            ->paginate(6);

        return $Friends ;

    }




}
