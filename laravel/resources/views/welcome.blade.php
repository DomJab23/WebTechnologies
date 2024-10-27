<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <div class="logo" style="background-image: url('{{ asset('assets/photos/PETAPP.png') }}'); width: 250px; height: 250px;">
            <a href="/"></a>
        </div>
        <ul class="navbar_menu">
            <li class="navbar_menu_item"><a href="/" class="navbar_menu_link">About</a></li>
            <li class="navbar_menu_item"><a href="/" class="navbar_menu_link">Gallery</a></li>
            <li class="navbar_menu_item"><a href="/" class="navbar_menu_link">Contacts</a></li>
            <li class="navbar_menu_item"><a href="/" class="navbar_menu_link">More</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog2.jpeg') }}'); height: 500px; color: white;">
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
    <section class="awards" style="background-color: orange; height: 400px;">
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
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}'); height: 400px; background-size: cover;"></div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter" style="background-image: url('{{ asset('assets/photos/dog_1.jpg') }}'); height: 300px; background-size: cover;">
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
        <div class="photo1" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}'); height: 400px; background-size: cover;"></div>
        <div class="photo2" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}'); height: 400px; background-size: cover;"></div>
        <div class="photo3" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}'); height: 400px; background-size: cover;"></div>
    </section>
    <section class="morePhotos">
        <div class="photo4" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}'); height: 400px; background-size: cover;"></div>
        <div class="photo5" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}'); height: 400px; background-size: cover;"></div>
        <div class="photo6" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}'); height: 400px; background-size: cover;"></div>
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
            <div class="map" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}'); height: 500px; background-size: cover;"></div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
