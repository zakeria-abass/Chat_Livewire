<?php

namespace App\Http\Livewire\Chat\Components;

use App\Models\Conversation;
use App\Models\Friendship;
use App\Models\User;
use App\Traits\FriendsGetTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class NewConversation extends Component
{
    use FriendsGetTrait ;
    public $label , $password , $type , $friend = [] ;






     public function  addconversation() {

          $user = Auth::id();


          DB::beginTransaction();

         try {


                 $conversation = Conversation::create([
                     'label' =>$this->label ,
                     'user_id' => $user ,
                     'type' =>$this->type ,
                     'password' =>$this->password ,

                 ]);


             $conversation->participant()->attach($this->friend);

             DB::table('participants')->insert([
                 'conversation_id' => $conversation->id ,
                 'user_id' => $user,
                 'role' => 'admin',
                 'joined_at' =>now() ,
             ]);

              DB::commit();
         }catch (\Exception $exception) {
              DB::rollBack();
         }

         // إعادة تعيين القيم للمتغيرات
         $this->label = '';
         $this->password = '';
         $this->type = '';
         $this->friend = [];
     }

    public function render()
    {

        $Friends = $this->GetFriend();

        return view('livewire.chat.components.new-conversation',compact('Friends'));
    }
}
