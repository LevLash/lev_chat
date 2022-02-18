<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('reg');
})->name('reg');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/chat/profile', 'UserController@createAccount')->name('reg-done');

Route::post('/chat', 'UserController@login')->name('login-done');

Route::get('/contacts', 'ContactController@getAllUsers');

Route::post('/contacts/test', 'ContactController@addContacts')->name('contacts-done');

Route::post('/chat/chatroom', 'ChatController@showChatroom')->name('chatroom');

Route::post('/chat/chatroom-send', 'ChatController@saveMessage')->name('chatroom-send');