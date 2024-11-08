<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts - PETAPP </title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

    <style>
        /* Example responsive styles */
        .logo-container {
            display: flex;
            justify-content: center; /* Center logo horizontally */
            align-items: center; /* Center logo vertically */
            margin: 10px; /* Optional: Add margin for spacing */
        }

        .logo {
            max-width: 250px; /* Set a max width for the logo */
            height: auto; /* Maintain aspect ratio */
        }

        .firstPicture, .aboutUsPicture, .map, .photo1, .photo2, .photo3, .photo4, .photo5, .photo6 {
            background-size: cover;
            background-position: center;
            height: auto;
            min-height: 300px;
        }

        @media (max-width: 768px) {
            .navbar_menu {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar_menu_item {
                margin: 10px 0;
            }

            .firstPicture, .aboutUsPicture, .map, .photo1, .photo2, .photo3, .photo4, .photo5, .photo6 {
                min-height: 200px;
            }
        }

        /* Modal styles */
        body {font-family: Arial, Helvetica, sans-serif;}
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #04AA6D\;
            color: white;
            padding: 14px 20px;
            margin: 18px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover { opacity: 0.8; }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
        }
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .animate {
            animation: animatezoom 0.6s;
        }
        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
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
                <form><input type="text" id="name" name="name"></form>
                <form><input type="text" id="email" name="email"></form>
                <form><input type="tel" id="phone" name="phone"></form>
                <form><input type="text" id="message" name="message"></form>
                <a class="sendButton" href="/">SEND!</a>
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

    <!-- Modal Login Form -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="{{ route('login') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                
                <!--img src="{{ asset('assets/photos/img_avatar2.png') }}" alt="Avatar" class="avatar"-->
                
            </div>
            <div class="container">
                <h2>Sign in to your account.</h2>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me</input>
                </label>
            </div>
            <div class="container" >
                
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

@endsection

</body>
</html>

