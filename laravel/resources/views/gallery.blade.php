@extends('layout')

@section('title', 'Gallery')
<!--Links to CSS styles-->
<link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <!--Link to favicon-->
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

@section('content')
    <section class="gallery">
        <h1>GALLERY</h1>
        <p>Check out our beautiful pets that are looking for homes!</p>
        <!-- Image gallery content goes here -->
    </section>
@endsection
