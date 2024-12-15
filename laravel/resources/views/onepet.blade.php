<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More about {{$pet->name}}</title>
    <link rel="icon" href="../../assets/photos/PetApp-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/onePet.css">
</head>
<body>
    <section class="pet-settings">
    <div class="pet-description">
        @auth
            @if(Auth::user()->usertype=='admin'||Auth::user()->usertype=='employee')
                <a href="/management"><button>Back</button></a>
            @elseif(Auth::user()->usertype=='volunteer')
                <a href="/volunteer"><button>Back</button></a>
            @endif
        @else
            <a href="{{url()->previous()}}"><button>Back</button></a>
        @endauth
        <h1>More About {{$pet->name}}</h1>
        <p><strong>Species:</strong> {{$pet->species}}</p>
        <p><strong>Breed:</strong> {{$pet->breed}}</p>
        <p><strong>Sterilized:</strong> {{$pet->sterilized ? 'Yes' : 'No'}}</p>
        <p><strong>Age:</strong> {{$pet->age}}</p>
        <p><strong>Health Details:</strong> {{$pet->health}}</p>
        <p><strong>Description:</strong> {{$pet->descriptions}}</p>
        @auth
            <div class="form-section">
                <h3>Upload a New Picture</h3>
                <form action="{{route('imageAdd')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="pet_id" value="{{$pet->id}}">
                    <label for="image">Select Image:</label>
                    <input type="file" name="image" id="image" required>
                    <button>Upload</button>
                </form>
            </div>
        @endauth
    </div>
    <div class="picture-section">
        <h2>Pictures of {{$pet->name}}: {{$images->count()}}</h2>
        <div class="image-section">
            @foreach($images as $image)
                <div class="image-container">
                    <img src="{{$image->path}}" alt="Picture of {{$pet->name}}" class="">
                    @auth
                        <form action="{{route('imageDelete')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$image->id}}">
                            <input type="hidden" name="path" value="{{$image->path}}">
                            <button class="delete-button">Delete Picture</button>
                        </form>
                    @endauth
                </div>
            @endforeach
        </div>  
    </div>
</section>
</body>
</html>
