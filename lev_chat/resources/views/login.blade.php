@extends('layouts.account_form')
@section('head-block')
<title>Login</title>
@endsection
@section('page-name')
<h1>Login Page</h1>
@endsection
@section('form-arguments')
<form action="{{ route('login-done') }}" method='POST'>
@endsection
@section('button-name')
Login
@endsection