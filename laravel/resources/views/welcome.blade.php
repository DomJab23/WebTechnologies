<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tag in the browser search -->
    <title>PETAPP - Helping Animals</title>
    <!--Links to CSS styles-->
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <!--Link to favicon-->
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">
</head>
<body>
    @extends('layout')
    @section('content')
    <!-- The first photo on the website with title and donation button -->
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog_banner.png') }}'); color: white;">
        <div class="hero-container">
            <h2 class="dotation-heading">ANIMALS NEED<br>YOUR HELP!</h2>
            <p class="dotation-text">Make a difference with funds or action!</p>
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
                <label for="amount"><b>Enter desired amount</b></label>
                <input type="text" placeholder="Amount" name="amount" required>                
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
        @foreach ($pets as $pet)
            <div class="firstPet">
                <img src="{{ $pet->firstImagePath}}" alt="PETAPP Logo" class="pet-photo">
                <h1 class="name">{{$pet->name}}</h1>
                <h2 class="position">Position</h2>
                <p class="shortStory">{{$pet->descriptions}}</p>
            </div>
        @endforeach
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
                <h1 class="newsletter-main-heading">JOIN OUR NEWSLETTER</h1>
                <h2 class="newsletter-heading">Stay Up To Date With All The Latest News!</h2>
                <form>
                    <input class="newsletter_input" type="text" id="name" name="name" placeholder="Enter your e-mail here">
                    <button class="button" href="/">JOIN NOW!</button>
                </form>
        </div>
        <div class="newsletterspace"><h1></h1></div>
    </section>
    <!-- Section that shows/ introduces our team -->
    <!-- Headings -->
    <section class="ourTeam">
        <h1 >OUR STAFF</h1>
        <h2>Team of Professionals</h2>
    </section>
     <!-- Boxes with picture and short description of each person in the team -->
    <section class="ourteam">
         <!-- First Person -->
        <div class="firstPerson">
            <img src="{{ asset('assets/photos/pet-shelter-manager.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Alex Zizeloski</h1>
            <h2 class="position">Manager</h2>
            <p class="shortStory">
                Alex Zizeloski is a dedicated pet shelter manager 
                known for his compassionate approach and exceptional organizational skills. 
                He oversees daily operations, ensuring the well-being of animals. 
            </p>
        </div>
        <!-- Second Person -->
        <div class="secondPerson">
            <img src="{{ asset('assets/photos/pet-shelter-vet.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Taylor Johns</h1>
            <h2 class="position">Vet</h2>
            <p class="shortStory">
                Taylor Johns, a compassionate veterinarian at Hope Haven Pet Shelter, 
                specializes in animal care and rehabilitation. 
                He ensures every pet receives expert medical attention
            </p>
        </div>
        <!-- Third Person -->
        <div class="thirdPerson">
            <img src="{{ asset('assets/photos/pet-shelter-worker.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Jordan Belfort</h1>
            <h2 class="position">Worker</h2>
            <p class="shortStory">
                Jordan Belfort is a compassionate pet shelter worker dedicated to 
                rescuing and rehoming animals. With exceptional care and empathy, 
                Jordan ensures pets find loving, forever homes.
            </p>
        </div>
        <div class="thirdPerson">
            <img src="{{ asset('assets/photos/pet-shelter-volunteer.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Mike Wasowski</h1>
            <h2 class="position">Volunteer</h2>
            <p class="shortStory">
                Mike Wasowski, a dedicated pet shelter volunteer, tirelessly cares for animals in need. 
                With compassion and energy, he helps with feeding, 
                cleaning, and finding loving homes for rescued pets.
            </p>
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
                <form><input class="message-input" type="text" id="message" name="message" placeholder="Message" overflow-wrap: break-word;></input>
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
    <!-- Modal Login Form -->
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
