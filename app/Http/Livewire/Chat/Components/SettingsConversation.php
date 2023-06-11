<?php

namespace App\Http\Livewire\Chat\Components;

use App\Models\Conversation;
use App\Models\Messages;
use App\Models\User;
use App\Traits\FriendsGetTrait;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SettingsConversation extends Component
{

     use FriendsGetTrait ;

    public $selectedConversation , $open = 0 , $label , $phoneUser;

    public function mount($selectedConversation)
    {
        $this->selectedConversation = $selectedConversation;
    }

     public function open() {
         $this->open =  1 ;


     }

     public function close() {
         $this->open =  0 ;

         $this->label = "" ;
     }


     public function  save() {

        Conversation::where('id',$this->selectedConversation)->update([
             'label' => $this->label
        ]);


         $this->createMessages("The group name has changed : by ");

         $this->label = "" ;
     }


     public  function  add($id) {


         DB::table('participants')->insert([
             'conversation_id' => $this->selectedConversation ,
             'user_id' => $id,
             'role' => 'member',
             'joined_at' =>now() ,
         ]);

         $this->createMessages("has been added : by");
     }

    public  function  logout() {


        $true = DB::table('participants')
            ->where('user_id', auth()->id())
            ->where('conversation_id', $this->selectedConversation)
            ->delete();

        if ($true) {
            $this->createMessages("The group has been exited :");

            return $this->redirect('/chat');
        }

    }


    public function createMessages($title) {
        Messages::create([
            'conversation_id' => $this->selectedConversation,
            'user_id'  => auth()->id(),
            'body' => $title.$this->label,
            'type' => "update",
        ]);
    }


    public function render()
    {

         $user= User::where('phone',$this->phoneUser)->first();

        $Conversations =  Conversation::with('participant' )->find($this->selectedConversation) ;

        $Friends = $this->GetFriend();


        return view('livewire.chat.components.settings-conversation',compact('user','Conversations','Friends'));
    }
}
