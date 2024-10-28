@extends('layout')

@section('title', 'Contacts')

@section('content')
    <section class="GetInTouch">
        <div class="title">
            <h1>CONTACTS</h1>
            <h2>LET'S GET IN TOUCH</h2>
        </div>
        <div class="contactFormAndMap">
            <div class="contactForm">
                <form>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                    <input type="email" id="email" name="email" placeholder="Your Email">
                    <input type="tel" id="phone" name="phone" placeholder="Your Phone">
                    <textarea id="message" name="message" placeholder="Your Message"></textarea>
                    <a class="sendButton" href="/">SEND!</a>
                </form>
            </div>
            <div class="map" style="background-image: url('{{ asset('assets/photos/hamster.jpg') }}');"></div>
        </div>
    </section>
@endsection
