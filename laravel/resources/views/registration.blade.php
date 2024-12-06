@extends('layout')

@section('content')
    <div class="title"">
        <h1 class="chooseText">REGISTER</h1>
        <div class="centerBox registration_page">
            <div class="centerBox registration-form">
                <form action="{{ route('registerPush') }}" method="post" class="registration-form">
                    @csrf
                    <p class="regLabel">Choose a username:</p>
                    <input class="regInput" type="text" name="uname" placeholder="Username">
                    
                    <p class="regLabel">Choose a password:</p>
                    <input class="regInput" type="password" name="password" placeholder="Password">
                    
                    <p class="regLabel">Enter your code:</p>
                    <input class="regInput" type="text" name="code" placeholder="Code">
                    <br>
                    
                    <button class="modalButton">Register</button>
                </form>
            </div>
        </div>
@endsection