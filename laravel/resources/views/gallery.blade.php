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
            <h1 class="orange">Gallery</h1>
            <h2>Check out our photos!</h2>
            <p class="takepethome">
                Browse through the images to see the adorable faces and unique personalities of our furry friends.
            </p>
        </div>
    </section>
    <section class="gallery-photos">
        @foreach ($pets as $pet)
            <a href="{{route('onePet', ['id'=>$pet->id])}}" class="gallery-item"> 
                <div>
                    <img src="{{ $pet->firstImagePath}}" alt="No image avaible" class="gallery-photo">
                    <p class="black">{{$pet->name}}</p>
                </div>
            </a>
        @endforeach
    </section>
    <section class="flexContainer-text">
        <div class="text">
            <p class="text-at-the-end">
            We hope these snapshots inspire you to adopt, volunteer, or support our mission in any way you can. 
            Thank you for helping us make a difference in the lives of these amazing animals! 
            </p>
        </div>
    </section>
@endsection
