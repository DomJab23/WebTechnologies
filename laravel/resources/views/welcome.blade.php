<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETAPP - Helping Animals</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">
  
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
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog_banner.png') }}'); color: white;">
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
     <!--
    <section class="awards" style="background-color: orange;">
        <h1>Awards</h1>
    </section>
    -->
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
    <section class="newsletter" style="background-image: url('{{ asset('assets/photos/newsletter-photo.jpg') }}');">
        <div class="newsletterText">
            <h1>JOIN THE NEWSLETTER</h1>
            <h2>Stay Up To Date With All The Latest News!</h2>
            <form class="main-newsletter">
                <input type="text" id="name" name="name">
            </form>
            <a class="button" href="/">JOIN NOW!</a>
        </div>
        <div class="newsletterspace">
            <h1>aaa</h1>
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
</body>
</html>
