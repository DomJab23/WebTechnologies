<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pet Manager</title>
        <link rel="stylesheet" href="../../assets/css/petmanagement.css">
    </head>
    <body>
        <d class="split left">
            <p>Add pet:</p>
            <form action="{{route('petAdd')}}" method="POST">
                @csrf
                <p class="inputLabel">Name of pet:</p>
                <input type="text" placeholder="Name of the pet" name="name"/><br>

                <p class="inputLabel">Age of pet:</p>
                <input type="number" placeholder="Age of the pet" name="age"/><br>

                <p class="inputLabel">Species of pet:</p>
                <input type="text" placeholder="Species of the pet" name="species"/><br>

                <p class="inputLabel">Breed of pet:</p>
                <input type="text" placeholder="Breed of the pet" name="breed"/><br>

                <label for="sterilized">Sterilized:</label>
                <input type="checkbox" placeholder="Is the pet sterilized?" name="sterilized"/><br>

                <p class="inputLabel">Information about health of pet:</p>
                <input type="text" placeholder="Information about the health of the pet" name="health"/><br>

                <p class="inputLabel">Description:</p>
                <input type="text" placeholder="Description of the pet" name="descriptions"/><br>

                <button>Add Pet</button>
            </form> <br><br>

            <p>Update pet:</p>
            <form action="{{route('petUpdate')}}" method="POST">
                @csrf
                <input type="number" placeholder="Id of the pet to update" name="id"/><br>
                <input type="text" placeholder="Updated name of the pet" name="name"/><br>
                <input type="number" placeholder="Updated age of the pet" name="age"/><br>
                <input type="text" placeholder="Updated species of the pet" name="species"/><br>
                <input type="text" placeholder="Updated breed of the pet" name="breed"/><br>
                <label for="sterilized">Sterilized:</label>
                <input type="checkbox" placeholder="Was the pet sterilized?" name="sterilized"/><br>
                <input type="text" placeholder="Updated information about the health of the pet" name="health"/><br>
                <input type="text" placeholder="Updated description of the pet" name="descriptions"/><br>
                <button>Update Pet</button>
            </form><br><br>

            <p>Delete pet:</p>
            <form action="{{route('petDelete')}}" method="POST">
                @csrf
                <input type="number" placeholder="Id of the pet to delete" name="id"/><br>
                <button>Delete Pet</button>
            </form><br><br>
        </d>

        <d class="split right">
            <p>Pets in the shelter:</p>
            <table>
                <thead style="font-size:20px">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Species</th>
                    <th>Sterilized</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            <td>{{$pet->id}}</td>
                            <td>{{$pet->name}}</td>
                            <td>{{$pet->age}}</td>
                            <td>{{$pet->species}}</td>
                            @if($pet->sterilized)
                                <td>Sterilized</td>
                            @else
                                <td>Not sterilized</td>
                            @endif
                            <td>
                                <form action="{{route('onePet')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$pet->id}}">
                                    <button>More</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        </d>
        
    </body>
</html>