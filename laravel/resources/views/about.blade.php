@extends('layout')

@section('title', 'About Us')

@section('content')
    <!-- About Us Section -->
    <section class="aboutUs">
        <div class="flexContainer">
            <div class="aboutUsText">
                <h1>ABOUT PETAPP</h1>
                <h2>Our Mission</h2>
                <p>At PETAPP, we are passionate about making a difference in the lives of animals in need. Our mission is to connect shelter pets with loving homes and to promote the welfare of animals everywhere.</p>

                <h2>Who We Are</h2>
                <p>We are a dedicated team of animal lovers, volunteers, and professionals committed to the cause of animal rescue. Our diverse backgrounds and experiences come together to create a supportive community focused on helping pets find their forever homes.</p>

                <h2>What We Do</h2>
                <p>Through various initiatives including adoption events, fundraising campaigns, and educational outreach, we strive to raise awareness about the importance of animal adoption and responsible pet ownership.</p>
            </div>
            <div class="aboutUsPicture" style="background-image: url('{{ asset('assets/photos/our_team.jpg') }}');"></div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="callToAction">
        <h2>Join Us in Making a Difference!</h2>
        <p>Your support can help us save more lives. Whether you choose to adopt, volunteer, or donate, every action counts!</p>
        <a class="button" href="/">GET INVOLVED</a>
    </section>
@endsection
