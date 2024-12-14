@extends('layout')

@section('title', 'Gallery')

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
                <div class="image-cropper">
                    <img src="{{ $pet->firstImagePath }}" alt="No image available" class="gallery-photo">
                </div>
                <p class="petName">{{ $pet->name }}</p>
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

