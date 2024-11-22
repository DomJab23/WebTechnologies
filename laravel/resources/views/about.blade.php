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
            <div class="photo">
                <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            </div>
            <div class="">
                <h2>Who We Are</h2>
                <p>
                    We are a dedicated team of animal lovers, volunteers, and professionals 
                    committed to the cause of animal rescue. 
                    Our diverse backgrounds and experiences come together to create 
                    a supportive community focused on helping pets find their forever homes.
                </p>
            </div>
        </div>
        <div class="flexContainer-text-photo">
            <div class="aboutUsText">
                <h2>What We Do</h2>
                <p>Through various initiatives including adoption events, fundraising campaigns, 
                    and educational outreach, we strive to raise awareness about the importance 
                    of animal adoption and responsible pet ownership.
                </p>
            </div>
            <div class="photo">
                <img src="{{ asset('assets/photos/petPhoto.jpg') }}" alt="PETAPP Logo" class="pet-photo">
            </div>
        </div>
</div>

   
    
@endsection
