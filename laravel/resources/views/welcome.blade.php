<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETAPP - Helping Animals</title>
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">

</head>
<body>

    @extends('layout')

    @section('content')
    <!-- Donate Section -->
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog_banner.png') }}'); color: white;">
        <div class="hero-container">
            <h2 class="white">ANIMALS NEED<br>YOUR HELP!</h2>
            <p>Make a difference with funds or action! Adopt any pet that speaks to your heart!</p>
            <a class="button" href="/">DONATE NOW!</a>
        </div>
    </section>

    <!-- Other Sections (Adopt Pet, Awards, About Us, etc.) -->
    <!--<section class="petAdoption">
        <h1 class="orange">ADOPT PET</h1>
        <h2>cos</h2>
        <p>asas</p>-->
    </section>
     <!--
    <section class="awards" style="background-color: orange;">
        <h1 class="white">Awards</h1>
    </section>
    -->
    <section class="aboutUs">
        <div class="flexContainer">
            <div class="aboutUsText">
                <h1 class="orange">ABOUT US</h1>
                <h2>WHY DO WE LOVE PETS?</h2>
                <p class="aboutUs">We are a group of animal-loving students who saw a growing need to help shelter pets find homes more easily. 
                    With our shared passion for both technology and animal welfare, 
                    we decided to create an online platform dedicated to connecting rescue pets with caring families.</p>
            </div>
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>
    <section class="newsletter_section" style="background-image: url('{{ asset('assets/photos/catnewsletter.jpg') }}');">
        <div class="newsletter_text">
            <h1 class="white">JOIN OUR NEWSLETTER</h1>
            <h2>Stay Up To Date With All The Latest News!</h2>
            <form>
                <input class="newsletter_input" type="text" id="name" name="name" placeholder="Enter your e-mail here">
                <button class="button" href="/">JOIN NOW!</button>
            </form>
        </div>
        <div class="newsletterspace">
            <h1>     </h1>
        </div>
        
    </section>
    <section class="ourTeam">
        <h1 class="orange">OUR STAFF</h1>
        <h2>Team of Professionals</h2>
    </section>
    <section class="photos">
        <div class="photo" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
    </section>
    <section class="morePhotos">
        <div class="photo" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
        <div class="photo" style="background-image: url('{{ asset('assets/photos/catt.jpg') }}');"></div>
    </section>
    <section class="GetInTouch">
        <div class="title">
            <h1 class="orange">CONTACTS</h1>
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

    <!-- Newsletter Signup -->
    <div class="footer-section newsletter-section">
      <h4>Newsletter</h4>
      <p>Subscribe to our newsletter for updates.</p>
      <form class="newsletter-form">
        <input type="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </footer>

    <!-- Modal Login Form -->
    <div id="id01" class="modal">
        <form class="modal-content animate" action="{{ route('login') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <h2>Sign in to your account.</h2>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button class="button" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me</input>
                </label>
            </div>
            <div class="container" >
                
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    @endsection
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
</body>
</html>
