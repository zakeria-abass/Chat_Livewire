<?php

namespace App\Http\Livewire\Chat\Components;

use App\Models\Friendship;
use Livewire\Component;
use Livewire\WithPagination;

class FriendRequests extends Component
{
 use  WithPagination ;

    protected $paginationTheme = 'bootstrap';

    public function acceptance( $acceptance,$id) {
         $user =Friendship::where([
             ['user_id',$id],
             ['friend_id',auth()->id()]
         ])->first();

         if ($acceptance == 1){
             $user->update([
                 'status' => $acceptance
             ]);
         }else {
             $user->delete();
         }


    }

    public function render()
    {
        $Requests = Friendship::with('user')->where([
            ['friend_id',auth()->id()],
            ['status',0],

        ])->paginate(6);

        return view('livewire.chat.components.friend-requests',compact('Requests'));
    }
}
