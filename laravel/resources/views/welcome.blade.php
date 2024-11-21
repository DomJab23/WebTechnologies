<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Tag in the browser search -->
    <title>PETAPP - Helping Animals</title>
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">

</head>
<body>
    @extends('layout')
    @section('content')
    <!-- The first photo on the website with title and donation button -->
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog_banner.png') }}'); color: white;">
        <div class="hero-container">
            <h2 class="white">ANIMALS NEED<br>YOUR HELP!</h2>
            <p>Make a difference with funds or action! Adopt any pet that speaks to your heart!</p>
            <a class="button" href="/">DONATE NOW!</a>
        </div>
    </section>
    <!-- The section to display pets which can be adopted -->
    <section class="petAdoption">
        <h1 class="orange">ADOPT PETS</h1>
        <h2>Bring a new pet home !</h2>
        <p class="takepethome">Ready to find your new best friend?  By adopting, you are giving a 
                rescue animal a second chance at life, and in return, 
                you'll gain a loyal companion who will fill your home with love.<p>
        <!-- Here are some buttons with filters to display pets of selected size category  -->
        <div class="animal-selection-bar">
            <button class="animal-size">All</button>
            <button class="animal-size">Small</button>
            <button class="animal-size">Medium</button>
            <button class="animal-size">Large</button>
        </div>
    </section>
    <!-- Displaying 4 pets of selected category  -->
    <section class="petsReadyForAdoption">
        <!-- First Pet  -->
        <div class="firstPet">
            <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            <h1 class="name">Alex</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Alex.</p>
        </div>
        <!-- Second Pet  -->
        <div class="secondPet">
            <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            <h1 class="name">Taylor</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Taylor.</p>
        </div>
        <!-- Third Pet  -->
        <div class="thirdPet">
            <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            <h1 class="name">Rowan</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Rowan.</p>
        </div>
        <!-- Forth Pet  -->
        <div class="forthPet">
            <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            <h1 class="name">Jordan</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Jordan.</p>
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
    <!-- This section displays short information/description of our organization and goals -->
    <section class="aboutUs">
        <div class="flexContainer">
            <div class="aboutUsText">
                <h1 class="orange">ABOUT US</h1>
                <h2>WHY DO WE LOVE PETS?</h2>
                <!-- Text in this section on the left side-->
                <p class="aboutUs">We are a group of animal-loving students who saw a growing need to help shelter pets find homes more easily. 
                    With our shared passion for both technology and animal welfare, 
                    we decided to create an online platform dedicated to connecting rescue pets with caring families.</p>
            </div>
            <!-- Picture in this section on the right side-->
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>
     <!-- Newsletter section with picture background-->
    <section class="newsletter_section" style="background-image: url('{{ asset('assets/photos/catnewsletter.jpg') }}');">
        <div class="newsletterspace"><h1></h1></div>
        <div class="newsletter_text">
                <h1 class="white">JOIN OUR NEWSLETTER</h1>
                <h2>Stay Up To Date With All The Latest News!</h2>
                <form>
                    <input class="newsletter_input" type="text" id="name" name="name" placeholder="Enter your e-mail here">
                    <button class="button" href="/">JOIN NOW!</button>
                </form>
        </div>
        <!-- Space in newsletter that allows to move the text to the left-->
        <div class="newsletterspace"><h1></h1></div>
    </section>
    <!-- Section that shows/ introduces our team -->
    <!-- Headings -->
    <section class="ourTeam">
        <h1 class="orange">OUR STAFF</h1>
        <h2>Team of Professionals</h2>
    </section>
     <!-- Boxes with picture and short description of each person in the team -->
    <section class="ourteam">
         <!-- First Person -->
        <div class="firstPerson">
            <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Alex</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Alex.</p>
        </div>
        <!-- Second Person -->
        <div class="secondPerson">
            <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Taylor</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Taylor.</p>
        </div>
        <!-- Third Person -->
        <div class="thirdPerson">
            <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Jordan</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Jordan.</p>
        </div>
    </section>
    <!-- Contact section with contact form and google maps adress -->
    <section class="GetInTouch">
        <!-- Headings -->
        <div class="title">
            <h1 class="orange">CONTACTS</h1>
            <h2>LET'S GET IN TOUCH</h2>
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
    <!--Footer-->
    <footer class="footer">
    <!-- Logo and Text -->
        <div class="footer-section logo-section">
            <a >
                <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="footer-logo">
            </a>
            <p class="footer-text">Check our socials!</p>
            <!-- Social media icons with links to each social media platform -->
            <div class="social-media-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/facebook-app-round-white-icon.png') }}" alt="FB" />
                </a>
                <a href="https://www.tiktok.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/tiktok-white-icon.png') }}" alt="TT" />
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/instagram-white-icon.png') }}" alt="IG" />
                </a>
                <a href="https://www.tiktok.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/linkedin-app-white-icon.png') }}" alt="LI" />
                </a>
            </div>
        </div>
    <!-- Contact Information -->
    <div class="footer-section contact-section">
        <h4>Contact Information</h4>
        <p>Email: contact@example.com</p>
        <p>Phone: +123 456 7890</p>
        <p>Address: 123 Example Street, City, Country</p>
    </div>
    <!-- Newsletter Signup in Footer -->
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
