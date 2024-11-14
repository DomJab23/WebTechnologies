<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>



    <body>
        <a href="/management"><button>Back</button></a>

        <p style="font-size:30px">{{$pet->name}}</p>
        @if($pet->sterilized)
            <p>Species: {{$pet->species}}, Breed: {{$pet->breed}}, Sterilized, Age: {{$pet->age}}</p>
        @else
            <p>Species: {{$pet->species}}, Breed: {{$pet->breed}}, Not Sterilized, Age: {{$pet->age}}</p>
        @endif
        <p>Health details: {{$pet->health}}</p>
        <p>Description: {{$pet->descriptions}}</p>
        <br>

        <p>Pictures of this animal: {{$images->count()}}</p>
        @foreach($images as $image)
            <img src="{{$image->path}}" alt="">
            <form action="{{route('imageDelete')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$image->id}}">
                <input type="hidden" name="path" value="{{$image->path}}">
                <button>Delete this picture</button>
            </form>
        @endforeach
        
        <form action="{{route('imageAdd')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="pet_id" value="{{$pet->id}}">
            <label for="image">Input new image for animal:</label>
            <input type="file" name="image">
            <br>
            <button>Upload</button>
        </form>
    </body>

</html>