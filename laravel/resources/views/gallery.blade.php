@extends('layout')

@section('title', 'Gallery')
<!--Links to CSS styles-->
<link rel="stylesheet" href="../../assets/css/app.css">
<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <link rel="stylesheet" href="../../assets/css/gallery.css">
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

@section('content')
    <section class="gallery">
        <div class="title">
            <h1 class="orange">CONTACTS</h1>
            <h2>Check out our photos!</h2>
            <p class="takepethome">
                Browse through the images to see the adorable faces and unique personalities of our furry friends.
            </p>
        </div>
    </section>
    <section class="gallery-photos">
        <div class="three-pictures">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
        </div>
        <div class="four-pictures">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
        </div>
        <div class="three-pictures">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
        </div>
        <div class="four-pictures"> 
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
            <img src="{{ asset('assets/photos/volunteer-photo.jpg') }}" class="gallery-photo">
        </div>
        <div class="flexContainer-text">
            <div class="text">
                <h1></h1>
                <p class="text-at-the-end">
                We hope these snapshots inspire you to adopt, volunteer, or support our mission in any way you can. 
                Thank you for helping us make a difference in the lives of these amazing animals! 
                </p>
            </div>
        </div>
    </section>
@endsection
