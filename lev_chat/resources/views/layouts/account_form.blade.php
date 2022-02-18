@extends('layouts.app')
@section('content')
@yield('page-name')
@yield('form-arguments')
    @csrf

    <div class='main'>
        <div class='field'>
            <label for='login' class='login-label'>Enter the login</label>
            <input type='text' name='login' placeholder='login' id='login' class='form-control'>
        </div>

        <div class='field'>
            <label for='psw' class='login-label'>Enter the password</label>
            <input type='password' name='psw' placeholder='password' id='login' class='form-control'>
        </div>  
    </div>

    <br/>
    <br/>
    <br/>

    <button type='submit'>
        @yield('button-name')
    </button>
</form>
@endsection