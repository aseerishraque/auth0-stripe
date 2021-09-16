@extends('layouts.app')

@section('content')
    <h1>Auth0  Laravel</h1>
@endsection

@section('menu')
    @auth
        <a href="{{ route('stripe') }}" class="btn btn-primary">Pay By Stripe</a>
        <a href="{{ route('logout') }}" id="qsLogoutBtn" class="btn btn-success">Logout</a>
    @else
        <a href="{{ route('login') }}" id="qsLoginBtn" class="btn btn-success">Login/Signup</a>
    @endauth
@endsection
