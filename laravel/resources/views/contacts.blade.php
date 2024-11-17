<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - PETAPP </title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
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

    <section class="GetInTouch">
        <div class="title">
            <h1>CONTACTS</h1>
            <h2>LET'S GET IN TOUCH</h2>
        </div>
        <div class="contactFormAndMap">
            <div class="contactForm">
                <form><input type="text" id="name" name="name" placeholder="Name"></form>
                <form><input type="text" id="email" name="email" placeholder="E-mail"></form>
                <form><input type="text" id="phone" name="phone" placeholder="Phone number"></form>
                <form><input type="text" id="message" name="message" placeholder="Message"></form>
                <a class="button" href="/">SEND!</a>
            </div>
            <div class="map" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>
    <!--Footer-->
    <footer class="footer">
    <!-- Logo and Text -->
    <div class="footer-section logo-section">
      
      <p class="footer-text">Check our socials !</p>
      <p class="social-media-icons">social media here</p>
    </div>

    <!-- Contact Information -->
    <div class="footer-section contact-section">
      <h4>Contact Information</h4>
      <p>Email: contact@example.com</p>
      <p>Phone: +123 456 7890</p>
      <p>Address: 123 Example Street, City, Country</p>
    </div>

    

@endsection

</body>
</html>

