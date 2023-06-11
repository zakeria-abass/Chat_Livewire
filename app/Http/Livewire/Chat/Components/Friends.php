<?php

namespace App\Http\Livewire\Chat\Components;

use App\Models\User;
use App\Traits\FriendsGetTrait;
use Livewire\Component;

class Friends extends Component
{
    use FriendsGetTrait ;

    public function render()
    {

        $Friends = $this->GetFriend();

        return view('livewire.chat.components.friends' , compact('Friends'));
    }
}
