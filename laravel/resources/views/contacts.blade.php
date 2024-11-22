<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - PETAPP </title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

    <style>
        .map {
            background-size: cover;
            background-position: center;
            height: auto;
            min-height: 300px;
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    
@extends('layout')

@section('content')

    <!-- Contact section with contact form and google maps adress -->
    <section class="GetInTouch">
        <!-- Headings -->
        <div class="title">
            <h1 class="orange">CONTACTS</h1>
            <h2>LET'S GET IN TOUCH</h2>
            <p class="takepethome">We'd love to hear from you! Whether you have a question, feedback, or just want to say hello, feel free to reach out to us.</p>
        </div>
        <!-- Section below the heading divided into two parts: contact form and map -->
        <div class="contactFormAndMap">
            <!-- Contact Form on left side of the page -->
            <div class="contactForm">
                <form><input type="text" id="name" name="name" placeholder="Name"></form>
                <form><input type="text" id="email" name="email" placeholder="E-mail"></form>
                <form><input type="text" id="phone" name="phone" placeholder="Phone number"></form>
                <form><input class="message-input" type="text" id="message" name="message" placeholder="Message" overflow-wrap: break-word;></form>
                <a class="button" href="/">SEND!</a>
            </div>
             <!-- Google Maps map on right side of the page -->
            <div class="google-map" >
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2770.678243602756!2d9.780705292390556!3d54.912785895198326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b339da64bc7277%3A0x23acdc244b60c345!2sUniversity%20of%20Southern%20Denmark!5e0!3m2!1spl!2sdk!4v1732099354236!5m2!1spl!2sdk" 
                    width="600" height="600" style="border:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

</body>
</html>

