<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETAPP- Helping Animals</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

    <style>
        /* Example responsive styles */
        .logo, .firstPicture, .aboutUsPicture, .map, .photo1, .photo2, .photo3, .photo4, .photo5, .photo6 {
            background-size: cover;
            background-position: center;
        }

        .logo {
            width: 100%;
            height: auto;
            max-width: 250px;
            max-height: 250px;
        }

        .firstPicture, .aboutUsPicture, .map, .photo1, .photo2, .photo3, .photo4, .photo5, .photo6 {
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
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <div class="logo" style="background-image: url('{{ asset('assets/photos/PETAPP.png') }}');"></div>
        <ul class="navbar_menu">
            <li class="navbar_menu_item"><a href="/about" class="navbar_menu_link">About</a></li>
            <li class="navbar_menu_item"><a href="/gallery" class="navbar_menu_link">Gallery</a></li>
            <li class="navbar_menu_item"><a href="/contacts" class="navbar_menu_link">Contacts</a></li>
            <li class="navbar_menu_item"><a href="/more" class="navbar_menu_link">More</a></li>
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

    <!-- Adopt Pet Section -->
    <section class="petAdoption">
        <h1>ADOPT PET</h1>
        <h2>cos</h2>
        <p>asas</p>
    </section>

    <!-- Awards Section -->
    <section class="awards" style="background-color: orange;">
        <h1>Awards</h1>
    </section>

    <!-- About Us Section -->
    <section class="aboutUs">
        <div class="flexContainer">
            <div class="aboutUsText">
                <h1>ABOUT US</h1>
                <h2>WHY DO WE LOVE PETS?</h2>
                <p>We are a group of animal-loving students dedicated to helping shelter pets find homes.</p>
            </div>
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>

    <!-- Newsletter Section -->
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

    <!-- Our Staff Section -->
    <section class="ourTeam">
        <h1>OUR STAFF</h1>
        <h2>Team of Professionals</h2>
    </section>

    <!-- Photo Sections -->
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

    <!-- Contact Section -->
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

    <script src="script.js"></script>
</body>
</html>
