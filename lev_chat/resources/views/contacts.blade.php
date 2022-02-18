@extends('layouts.app')
@section('head-block')
<title>Find Contact`s</title>
@endsection
@section('content')
<h1>Find Contact`s Page</h1>

<form action='{{ route("contacts-done") }}' method='POST'>
    @csrf
    
    <ul>
    @for($i = 0; $i < count($userList); $i++)
    @if($userList[$i])
        <li>
            <label>{{ $userList[$i] }}</label>
            <input type='checkbox' name='{{ $i }}' value='{{ $userList[$i] }}'>
        </li>
    @endif
    @endfor
    </ul>

    <button type='submit' class='btn btn-success'>Add contact's</button>
</form>
@endsection