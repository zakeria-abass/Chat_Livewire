<?php

namespace App\Http\Livewire\Chat\Components;

use App\Models\Friendship;
use App\Models\User;
use Livewire\Component;

class AddFriends extends Component
{
    public  $phone  ;




     public function add($id) {

         $true = Friendship::where([
             ['user_id' , auth()->id()],
             ['friend_id' , $id]
         ])->first();

         if (!$true){
             Friendship::create([
                 'user_id' =>auth()->id(),
                 'friend_id' =>$id,
             ]);

         }



     }



    public function render()
    {
        $Friend = User::where('phone',$this->phone)->first();

        return view('livewire.chat.components.add-friends',compact('Friend'));
    }
}
