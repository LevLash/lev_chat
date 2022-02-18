@extends('layouts.account_form')
@section('head-block')
<title>Register</title>
@endsection
@section('page-name')
<h1>Register Page</h1>
@endsection
@section('form-arguments')
<form action="{{ route('reg-done') }}" method='POST'>
@endsection
@section('button-name')
Register
@endsection