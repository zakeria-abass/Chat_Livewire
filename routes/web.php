<?php

use App\Http\Controllers\Chat\AddFriendsController;
use App\Http\Controllers\Chat\FriendRequestController;
use App\Http\Controllers\Chat\FriendsController;
use App\Http\Controllers\Chat\NewConversationController;
use App\Http\Controllers\Chat\SettingsConversationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



  Route::prefix('chat')->middleware(['auth', 'verified'])->group(function () {

      Route::get('/', function () {
          return view('chat.index');
      })->name('chat');


      /***/

      Route::get('addFriends',AddFriendsController::class)
          ->name('addFriends');

      /***/

      Route::get('friendRequest',FriendRequestController::class)
          ->name('friendRequest');

      /***/

      Route::get('newConversation',NewConversationController::class)
          ->name('newConversation');

      /***/

      Route::get('Friends',FriendsController::class)
          ->name('friends');

      /***/

      Route::post('Settings-Conversation/{id}',SettingsConversationController::class)
          ->name('SettingsConversation');

  });




require __DIR__.'/auth.php';
