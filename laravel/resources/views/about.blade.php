@section('title', 'About')

@extends('layout')

@section('content')
<!-- Call to Action Section -->
<section class="callToActionPhoto" style="background-image: url('{{ asset('assets/photos/get-involved-photo.jpg') }}');">
        <div class="get-involed-heading">
            <h2 class="heading-get-involved">Join Us in Making a Difference!</h2>
            <p class="get-involved-text">  
                Whether you choose to adopt, volunteer, or donate, every action counts!
            </p>
            <button class="button-get-involved" onclick="window.location.href='/register';">GET INVOLVED</button>
        </div>
    </section>
    <!-- About Us Section--> 
    <section class="aboutUs">
    <div class="flexContainer-about-us">
        <div class="flexContainer-text">  
                <h1>ABOUT PETAPP</h1>
                <h2>Our Mission</h2>
                <p class="heading-text">
                    At PETAPP, we are passionate about making a difference in the lives of animals in need. 
                    Our mission is to connect shelter pets with loving homes and to promote the welfare of animals everywhere.
                <p>
        </div>
        <div class="flexContainer-text-photo">
        <div class="photo">
                <img src="{{ asset('assets/photos/pet-shelter-1.png') }}" alt="PETAPP Logo" class="photo">
            </div>
            <div class="text-team">
                <h2>Who are we ?</h2>
                <p class="text-team">
                    We are a dedicated team of animal lovers, volunteers, and professionals 
                    committed to the cause of animal rescue. 
                    Our diverse backgrounds and experiences come together to create 
                    a supportive community focused on helping pets find their forever homes.
                </p>
            </div>
        </div>
        <div class="flexContainer-text-photo">
            <div class="text-team">
                <h2 >What We Do ?</h2>
                <p class="text-team">Through various initiatives including adoption events, fundraising campaigns, 
                    and educational outreach, we strive to raise awareness about the importance 
                    of animal adoption and responsible pet ownership.
                </p>
            </div>
            <div class="photo">
                <img src="{{ asset('assets/photos/pet-shelter-2.png') }}" alt="PETAPP Logo" class="photo">
            </div>
        </div>
        <div class="flexContainer-text-photo">
            <div class="photo">
                <img src="{{ asset('assets/photos/pet-shelter-3.png') }}" alt="PETAPP Logo" class="photo">
            </div>
            <div class="text-team">
                <h2>How you can help ?</h2>
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
                <h1>Thank you for your support! </h1>
                <p class="heading-text">
                    Feel free to reach out if you have any questions or need more information on how to get involved.
                </p>
            </div>
        </div>
</div>  
@endsection