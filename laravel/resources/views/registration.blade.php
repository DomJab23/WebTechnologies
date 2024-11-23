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

        <div class="registration_page">
            <div class="registration-form">
                <form action="{{ route('registerPush') }}" method="post">
                    @csrf
                    <p class="chooseText darkOrange">Choose a username:</p>
                    <input type="text" name="uname" placeholder="Username">

                    <p class="chooseText darkOrange">Choose a password:</p>
                    <input type="password" name="password" placeholder="Password">

                    <p class="chooseText darkOrange">Enter your code:</p>
                    <input type="text" name="code" placeholder="Code">
                    <br>
                    <button class="button">Register</button>
                </form> 
                
            </div>
            <div class="registration-photo">
                <img src="{{ asset('assets/photos/hamster.jpg') }}" >
            </div>

                
        </div>
        @endsection
    </body>

</html>