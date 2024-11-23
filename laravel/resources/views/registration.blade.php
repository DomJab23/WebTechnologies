<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="../../assets/css/app.css">
        <link rel="stylesheet" href="../../assets/css/textColors.css">
        <link rel="stylesheet" href="../../assets/css/welcome.css">
        <link rel="stylesheet" href="../../assets/css/headings.css">
        <link rel="stylesheet" href="../../assets/css/registration.css">
        <!--Link to favicon-->
        <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">
    </head>

    <body class="backImage">

        @extends('layout')

        @section('content')
            <div class="title">
            <h1 class="orange">REGISTER</h1>
        <div class="registration_page">
            <div class="registration-form">
                <form action="{{ route('registerPush') }}" method="post">
                    @csrf
                    <p class="">Choose a username:</p>
                    <input class="input-field" type="text" name="uname" placeholder="Username">

                    <p class="">Choose a password:</p>
                    <input class="input-field" type="password" name="password" placeholder="Password">

                    <p class="">Enter your code:</p>
                    <input class="input-field" type="text" name="code" placeholder="Code">
                    <br>
                    <button class="button">Register</button>
                </form> 

                
        </div>
        @endsection
    </body>

</html>