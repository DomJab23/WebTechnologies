@section('title', 'Welcome')
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
  <form class="modal-content animate" action="{{ route('donate') }}" method="post" onsubmit="event.preventDefault(); openThankYouModal();">
    @csrf
    <div class="modal-container">
        <!-- Close button inside the modal container -->
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
    
            <button class="modalButton" type="submit">Donate</button>
        </div>
    </div>
</form>
    </div>
    <div id="thankYouModal" class="modal">
        <div class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="closeThankYouModal()" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <h2>Thank You for Your Donation!</h2>
                <p>Your support helps make a difference in the lives of animals. We appreciate your kindness.</p>
                <a class="button" href="/">Go Back to Home</a>
            </div>
        </div>
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
            <button class="animal-size">Dog</button>
            <button class="animal-size">Cat</button>
        </div>
    </section>

    <!-- Displaying 4 pets of selected category  -->
    <section class="petsReadyForAdoption">
        @foreach ($pets as $pet)
            <a href="{{route('onePet', ['id'=>$pet->id])}}" style="text-decoration: none"> 
                <div class="firstPet fadeout" data-species="{{ strtolower($pet->species)}}">
                    <img src="{{ $pet->firstImagePath}}" alt="No image avaible" class="pet-photo">
                    <h1 class="name">{{$pet->name}}</h1>
                    <h2 class="position">{{$pet->species}}</h2>
                    <p class="shortStory">{{$pet->descriptions}}</p>
                </div>
            </a>
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
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/hamster.png') }}');"></div>
        </div>
    </section>

    <!-- Newsletter section -->
    <section class="newsletter_section" style="background-image: url('{{ asset('assets/photos/catnewsletter.jpg') }}'); height">
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
        <div class="firstPerson">
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
        <div class="firstPerson">
            <img src="{{ asset('assets/photos/pet-shelter-worker.png') }}" alt="PETAPP Logo" class="footer-logo">
            <h1 class="name">Jordan Belfort</h1>
            <h2 class="position">Worker</h2>
            <p class="shortStory">
                Jordan Belfort is a compassionate pet shelter worker dedicated to 
                rescuing and rehoming animals. With exceptional care and empathy, 
                Jordan ensures pets find loving, forever homes.
            </p>
        </div>
        <div class="firstPerson">
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
    @include('contactSection')
    <!--Footer-->
    <!-- Modal Login Form -->
    <script>
        // Get the modals
        var donationModal = document.getElementById("donationModal");
        var thankYouModal = document.getElementById("thankYouModal");
    
        // Function to open donation modal
        function openDonationModal() {
            donationModal.style.display = "block";
        }
    
        // Function to close donation modal
        function closeDonationModal() {
            donationModal.style.display = "none";
        }
    
        // Function to open thank you modal after donation is completed
        function openThankYouModal() {
            donationModal.style.display = "none";  // Close the donation modal
            thankYouModal.style.display = "block";  // Open the thank you modal
        }
    
        // Function to close thank you modal
        function closeThankYouModal() {
            thankYouModal.style.display = "none";
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".animal-size");
            const pets = document.querySelectorAll(".firstPet");

            buttons.forEach(button => {
                button.addEventListener("click", () => {
                    const filter = button.textContent.toLowerCase(); 

                    pets.forEach(pet => {
                        const species = pet.dataset.species; 

                        if (filter === "all" || filter === species) {
                            pet.style.display = "block"; 
                        } else {
                            pet.style.display = "none"; 
                        }
                    });
                });
            });
        });
    </script>
    @endsection
</body>
</html>
