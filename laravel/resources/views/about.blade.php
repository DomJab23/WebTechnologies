<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETAPP - Helping Animals</title>
    <!--Links to CSS styles-->
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <link rel="stylesheet" href="../../assets/css/aboutUsPage.css">
    <!--Link to favicon-->
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

</head>

@extends('layout')

@section('content')
<!-- Call to Action Section -->
<section class="callToActionPhoto" style="background-image: url('{{ asset('assets/photos/get-involved-photo.jpg') }}');">
        <div class="get-involed-heading">
            <h2 class="heading-get-involved">Join Us in Making a Difference!</h2>
            <p class="get-involved-text">  
                Whether you choose to adopt, volunteer, or donate, every action counts!
            </p>
            <a class="button-get-involved" href="/">GET INVOLVED</a>
        </div>
    </section>
    <!-- About Us Section--> 
    <section class="aboutUs">
    <div class="flexContainer-about-us">
        <div class="flexContainer-text">
            <div class="text">
                <h1>ABOUT PETAPP</h1>
                <h2>Our Mission</h2>
                <p>
                    At PETAPP, we are passionate about making a difference in the lives of animals in need. 
                    Our mission is to connect shelter pets with loving homes and to promote the welfare of animals everywhere.
                </p>
            </div>
        </div>
        <div class="flexContainer-text-photo">
                <img src="{{ asset('assets/photos/pet-shelter-team.jpg') }}" alt="PETAPP Logo" class="photo-pet-shelter-team">
            <div class="text-team">
                <h2 class="text-team">Who are we ?</h2>
                <p class="text-team">
                    We are a dedicated team of animal lovers, volunteers, and professionals 
                    committed to the cause of animal rescue. 
                    Our diverse backgrounds and experiences come together to create 
                    a supportive community focused on helping pets find their forever homes.
                </p>
            </div>
        </div>
        <div class="flexContainer-text-photo">
            <div class="text-adoption-event">
                <h2>What We Do ?</h2>
                <p>Through various initiatives including adoption events, fundraising campaigns, 
                    and educational outreach, we strive to raise awareness about the importance 
                    of animal adoption and responsible pet ownership.
                </p>
            </div>
            <div class="photo">
                <img src="{{ asset('assets/photos/pet-adoption-event.jpg') }}" alt="PETAPP Logo" class="pet-adoption-event-photo">
            </div>
        </div>
        <div class="flexContainer-text-photo">
                <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" alt="PETAPP Logo" class="volunteer-photo">
            <div class="text-team">
                <h2 class="text-team">How you can help ? </h2>
                <p class="text-team">
                    You can make a difference by adopting a pet, volunteering your time, 
                    or donating to help provide essentials for the animals. 
                    If you can't adopt, consider fostering to give pets a temporary home. Spread the word about our mission
                    and participate in our events to help raise awareness and funds. 
                    Together, we can create a better world for animals.
                </p>
            </div>
        </div>
        <div class="flexContainer-text">
            <div class="text">
                <h1>Thank you for your support! </h1>
                <p>
                    Feel free to reach out if you have any questions or need more information on how to get involved.
                </p>
            </div>
        </div>
</div>

   
    
@endsection
