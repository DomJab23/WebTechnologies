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
            <!-- Donation Button that triggers the modal -->
            <a class="button" href="javascript:void(0)" onclick="openDonationModal()">DONATE NOW!</a>
        </div>
    </section>

    <!-- Donation Modal -->
    <div id="donationModal" class="modal">
        <form class="modal-content animate" action="{{ route('donate') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="closeDonationModal()" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <h2>Donate to Help Animals</h2>
                <p>Please enter your credit card details to make a donation.</p>
                
                <label for="cardNumber"><b>Credit Card Number</b></label>
                <input type="text" placeholder="Enter Credit Card Number" name="cardNumber" required>
                
                <label for="expiryDate"><b>Expiry Date</b></label>
                <input type="text" placeholder="MM/YY" name="expiryDate" required>
                
                <label for="cvv"><b>CVV</b></label>
                <input type="text" placeholder="Enter CVV" name="cvv" required>
                
                <button class="button" type="submit">Donate</button>
            </div>
        </form>
    </div>

    <!-- The section to display pets which can be adopted -->
    <section class="petAdoption">
        <h1 class="orange">ADOPT PETS</h1>
        <h2>Bring a new pet home !</h2>
        <p class="takepethome">Ready to find your new best friend? By adopting, you are giving a 
                rescue animal a second chance at life, and in return, 
                you'll gain a loyal companion who will fill your home with love.</p>
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
            <h1 class="name">Jordan</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Jordan.</p>
        </div>
        <!-- Forth Pet  -->
        <div class="forthPet">
            <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            <h1 class="name">Jordan</h1>
            <h2 class="position">Position</h2>
            <p class="shortStory">This is a short story about Jordan.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="aboutUs">
        <div class="flexContainer">
            <div class="aboutUsText">
                <h1 class="orange">ABOUT US</h1>
                <h2>WHY DO WE LOVE PETS?</h2>
                <p class="aboutUs">We are a group of animal-loving students who saw a growing need to help shelter pets find homes more easily. 
                    With our shared passion for both technology and animal welfare, we decided to create an online platform dedicated to connecting rescue pets with caring families.</p>
            </div>
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>

    <!-- Newsletter section -->
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
        <div class="newsletterspace"><h1></h1></div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-section logo-section">
            <a >
                <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="footer-logo">
            </a>
            <p class="footer-text">Check our socials!</p>
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

        <div class="footer-section contact-section">
            <h4>Contact Information</h4>
            <p>Email: contact@example.com</p>
            <p>Phone: +123 456 7890</p>
            <p>Address: 123 Example Street, City, Country</p>
        </div>

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
            
            </div>
            <div class="container">
                <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
        </form>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("donationModal");

        // Function to open donation modal
        function openDonationModal() {
            modal.style.display = "block";
        }

        // Function to close donation modal
        function closeDonationModal() {
            modal.style.display = "none";
        }
    </script>

    @endsection
</body>
</html>
