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
    </body>

</html>