@extends('layouts.app')
@section('head-block')
<title>Chatroom</title>
@endsection
@section('content')
<h1>Chatroom</h1>
<h2>{{ $contact }}</h2>
<form action='{{ route("chatroom-send") }}' method='POST'>
    @csrf

    <input type='text' name='message'/>
    <input type='hidden' name='contact' value='{{ $contact }}'/>
    <button type='submit'>Send</button>
</form>

@isset($messages)
@foreach($messages as $message)
    @if($message[0] == $currentLogin)
        <label style='float:right; background-color: red; border: solid darkblue;'>{{ $message[2] }}</label>
    @else
        <label style='float:left; background-color: green; border: solid darkblue;'>{{ $message[2] }}</label>    
    @endif
    <br/>
    <br/>

@endforeach
@endisset

@endsection