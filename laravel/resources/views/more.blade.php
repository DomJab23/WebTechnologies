@extends('layout')

@section('title', 'More')
<!--Links to CSS styles-->
<link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <!--Link to favicon-->
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">

@section('content')
    <section class="moreSection">
        <h1>MORE ABOUT US</h1>
        <p>Here you can find additional information about our initiatives, events, and more!</p>
        <!-- Additional content goes here -->
    </section>
@endsection
