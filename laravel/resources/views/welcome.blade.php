<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETAPP - Helping Animals</title>
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
    <nav>
        <div class="logo-container">
            <a href="/">
                <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="logo">
            </a>
        </div>
        <ul class="navbar_menu">
            <li class="navbar_menu_item"><a href="/about" class="navbar_menu_link">About</a></li>
            <li class="navbar_menu_item"><a href="/gallery" class="navbar_menu_link">Gallery</a></li>
            <li class="navbar_menu_item"><a href="/contacts" class="navbar_menu_link">Contacts</a></li>
            <li class="navbar_menu_item"><a href="/more" class="navbar_menu_link">More</a></li>
            <li class="navbar_menu_item"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog2.jpeg') }}'); color: white;">
        <div class="hero-container">
            <h1>ANIMALS NEED</h1>
            <h2>YOUR HELP!</h2>
            <p>Make a difference with funds or action! Adopt any pet that speaks to your heart!</p>
            <a class="button" href="/">DONATE NOW!</a>
        </div>
    </section>

    <!-- Other Sections (Adopt Pet, Awards, About Us, etc.) -->
    <section class="petAdoption">
        <h1>ADOPT PET</h1>
        <h2>cos</h2>
        <p>asas</p>
    </section>
    <section class="awards" style="background-color: orange;">
        <h1>Awards</h1>
    </section>
    <section class="aboutUs">
        <div class="flexContainer">
            <div class="aboutUsText">
                <h1>ABOUT US</h1>
                <h2>WHY DO WE LOVE PETS?</h2>
                <p>We are a group of animal-loving students who saw a growing need to help shelter pets find homes more easily. 
                    With our shared passion for both technology and animal welfare, 
                    we decided to create an online platform dedicated to connecting rescue pets with caring families.</p>
            </div>
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>
    <section class="newsletter" style="background-image: url('{{ asset('assets/photos/dog_1.jpg') }}');">
        <div class="newsletterText">
            <h1>JOIN THE NEWSLETTER</h1>
            <h2>Stay Up To Date With All The Latest News!</h2>
            <form>
                <input type="text" id="name" name="name">
            </form>
            <a class="newsletterButton" href="/">JOIN NOW!</a>
        </div>
    </section>
    <section class="ourTeam">
        <h1>OUR STAFF</h1>
        <h2>Team of Professionals</h2>
    </section>
    <section class="photos">
        <div class="photo1" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo2" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo3" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
    </section>
    <section class="morePhotos">
        <div class="photo4" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo5" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo6" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
    </section>
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

    <!-- Modal Login Form -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
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
                    <input type="checkbox" checked="
