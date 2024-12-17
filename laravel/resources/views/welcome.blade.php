@section('title', 'Welcome')

@extends('layout')
@section('content')
    <!-- The first photo on the website with title and donation button -->
    <section class="firstPicture" style="background-image: url('{{ asset('assets/photos/dog_banner.png') }}'); color: white;">
        <div class="hero-container">
            <h2 class="donation-heading">ANIMALS NEED<br>YOUR HELP!</h2>
            <p class="donation-text">Make a difference with funds or action!</p>
            <br>
            <!-- Donation Button that triggers the modal -->
            <button class="button" href="javascript:void(0)" onclick="openDonationModal()">DONATE NOW!</button>
        </div>
        <x-donationModal>
        </x-donationModal>
    </section>
    <!-- The section to display pets which can be adopted -->
    <section class="petAdoption">
        <h1>ADOPT PETS</h1>
        <h2>Bring a new pet home !</h2>
        <p class="takepethome">Ready to find your new best friend? By adopting, you are giving a 
                rescue animal a second chance at life, and in return, 
                you'll gain a loyal companion who will fill your home with love.</p>
        <div class="animal-selection-bar">
            <button class="animal-type">All</button>
            <button class="animal-type">Dog</button>
            <button class="animal-type">Cat</button>
        </div>
    </section>

    <!-- Displaying 4 pets of selected category  -->
    <section class="petsReadyForAdoption">
        @foreach ($pets as $pet)
            <a href="{{route('onePet', ['id'=>$pet->id])}}" style="text-decoration: none"> 
                <div class="petCard fadeout" data-species="{{ strtolower($pet->species)}}">
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
                <h1>ABOUT US</h1>
                <h2>WHY DO WE LOVE PETS?</h2>
                <br>
                <p class="aboutUs">We are a group of animal-loving students who saw a growing need to help shelter pets find homes more easily. 
                    With our shared passion for both technology and animal welfare, we decided to create an online platform dedicated to connecting rescue pets with caring families.</p>
            </div>
            <img class="aboutUsPicture" src="{{asset('assets/photos/hamster.png') }}"></img>
        </div>
    </section>

    <!-- Newsletter section -->
    <section class="newsletter_section" style="background-image: url('{{ asset('assets/photos/catnewsletter.jpg') }}')">
    <div class="newsletter_text">
        <h1 class="newsletter-main-heading">JOIN OUR NEWSLETTER</h1>
        <h2 class="newsletter-heading">Stay Up To Date With All The Latest News!</h2>
        <form id="newsletterForm">
            @csrf
            <input class="newsletter_input" type="email" id="email" name="email" placeholder="Enter your e-mail here" required>
            <button class="button" type="submit">JOIN NOW!</button>
        </form>
    </div>
    <x-newsletterModal>
    </x-newsletterModal>
    </section>
    <!-- Headings -->
        <h1>OUR STAFF</h1>
        <h2>Team of Professionals</h2>
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
                He ensures every pet receives expert medical attention.
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
    <x-contacts>
    </x-contacts>
    <!--Footer-->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const buttons = document.querySelectorAll(".animal-type");
            const pets = document.querySelectorAll(".petCard");

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