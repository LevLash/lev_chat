@extends('layouts.app')
@section('head-block')
<title>Chat</title>
@endsection
@section('content')
<h1>Chat Page</h1>
<a href='/contacts'>Find Contacts</a>
@isset($loginContacts)
<form action='{{ route("chatroom") }}' method='POST'>
    @csrf

    <div>
        <ul>
        @foreach($loginContacts as $contact)
            <li>
                <label>{{ $contact }}</label>
                <input type='radio' name = 'contact' value='{{ $contact }}' }}/>
            </li>
        @endforeach
        </ul>
    </div>

    <button type='submit'>Start chat</button>
</form>
@endisset
@endsection