<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsConversationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id)
    {
       return view('chat.settings-Conversation')->with([
           'id' => $id
       ]);
    }
}
