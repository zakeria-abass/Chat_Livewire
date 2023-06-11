<?php

namespace App\Http\Livewire\Chat\Components;

use App\Models\Conversation;
use App\Models\Messages;
use App\Models\User;
use Livewire\Component;

class ChatBox extends Component
{

    public $room = null , $messages  , $reply ;




    public  function conversation($id) {

        $room = Conversation::with(['messages' , 'participant'])->find($id);

        $this->room = $room ;



    }




    public function reply($id)
    {
       $Messages =  Messages::select('body','id')->find($id) ;

       $this->reply = $Messages ;

    }


    public function close()
    {

       $this->reply = null ;

    }


    public function sendMessages($reply = null ) {


        if (isset($reply))
        {
            $message = Messages::create([
              'conversation_id' => $this->room->id,
              'message_id' => $reply,
             'user_id' => auth()->id() ,
              'body' => $this->messages
          ]);

            $this->room->update([
                'last_message_id' => $message->id
            ]);

            $this->close();
        } else{

            $message =  $this->room->messages()->create([
                'user_id'=> auth()->id(),
                'body' => $this->messages
            ]);

            $this->room->update([
                'last_message_id' => $message->id
            ]);
        }



         $this->messages = "" ;

    }

    public function render()
    {
        $conversations = User::with(['conversations' => function($q) {
            $q->with('participant','user')->orderByDesc('updated_at');
        }])->find(auth()->id());



        return view('livewire.chat.components.chat-box',compact('conversations'));
    }
}
