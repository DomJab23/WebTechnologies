<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pet Manager</title>
        <link rel="stylesheet" href="../../assets/css/petmanagement.css">
    </head>

    @extends('layout')

    @section('title', 'Pet Manager')

    @section('content')

    <body>
        
        <div class="split left flexBox">
            <div class="sideBox">
                <p>Add pet:</p>
                <form action="{{route('petAdd')}}" method="POST">
                    @csrf
                    <label for="name">Name of pet:</label><br>
                    <input type="text" placeholder="Name of the pet" name="name" class="infoInput"/><br>

                    <label for="age">Age of pet:</label><br>
                    <input type="number" placeholder="Age of the pet" name="age" class="infoInput"/><br>

                    <label for="species">Species of pet:</label><br>
                    <input type="text" placeholder="Species of the pet" name="species" class="infoInput"/><br>

                    <label for="breed">Breed of pet:</label><br>
                    <input type="text" placeholder="Breed of the pet" name="breed" class="infoInput"/><br>

                    <label for="sterilized">Sterilized:</label>
                    <input type="checkbox" placeholder="Is the pet sterilized?" name="sterilized" class="infoInput"/><br>

                    <label for="health">Information about health of pet:</label><br>
                    <textarea type="text" placeholder="Information about the health of the pet" name="health" class="infoInput healthInput"></textarea><br>

                    <label for="descriptions">Description:</label><br>
                    <textarea type="text" placeholder="Description of the pet" name="descriptions" class="infoInput descriptionInput"></textarea><br>

                    <button>Add Pet</button>
                </form> <br><br>

                <p>Delete pet:</p>
                <form action="{{route('petDelete')}}" method="POST">
                    @csrf
                    <input type="number" placeholder="Id of the pet to delete" name="id" class="infoInput"/><br>
                    <button>Delete Pet</button>
                </form><br><br>
            </div>

            <div class="sideBox">
                <p>Update pet:</p>
                <form action="{{route('petUpdate')}}" method="POST">
                    @csrf
                    <label for="id">Pet ID:</label><br>
                    <input type="number" placeholder="Id of the pet to update" name="id" class="infoInput"/><br>

                    <label for="name">Name of pet:</label><br>
                    <input type="text" placeholder="Updated name of the pet" name="name" class="infoInput"/><br>

                    <label for="age">Age of pet:</label><br>
                    <input type="number" placeholder="Updated age of the pet" name="age" class="infoInput"/><br>

                    <label for="species">Species of pet:</label><br>
                    <input type="text" placeholder="Updated species of the pet" name="species" class="infoInput"/><br>

                    <label for="breed">Breed of pet:</label><br>
                    <input type="text" placeholder="Updated breed of the pet" name="breed" class="infoInput"/><br>
                    
                    <label for="sterilized">Sterilized:</label>
                    <input type="checkbox" placeholder="Was the pet sterilized?" name="sterilized" class="infoInput"/><br>

                    <label for="health">Health of pet:</label><br>
                    <textarea type="text" placeholder="Updated information about the health of the pet" name="health" class="infoInput healthInput"></textarea><br>

                    <label for="descriptions">Description:</label><br>
                    <textarea type="text" placeholder="Updated description of the pet" name="descriptions" class="infoInput descriptionInput"></textarea><br>

                    <button>Update Pet</button>
                </form><br><br>
            </div>
        </div>

        <div class="split right">
            <p>Pets in the shelter:</p>


            <!-- Table of pets-->
            <table>
                <thead style="font-size:20px">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Species</th>
                    <th>Sterilized</th>
                    <th></th>
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
                                <button onclick="document.getElementById('updateForm').style.display='block'" style="width:auto;">Update</button>
                            </td>
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
        </div>
    
        
    <!--Modal Update Form-->
        <div id="updateForm" class="modal">
            <form class="modal-content animate" action="{{route('petUpdate')}}" method="post">
            @csrf
                <label for="id">Pet ID:</label><br>
                <input type="number" placeholder="Id of the pet to update" name="id" class="infoInput"/><br>

                <label for="name">Name of pet:</label><br>
                <input type="text" placeholder="Updated name of the pet" name="name" class="infoInput"/><br>

                <label for="age">Age of pet:</label><br>
                <input type="number" placeholder="Updated age of the pet" name="age" class="infoInput"/><br>

                <label for="species">Species of pet:</label><br>
                <input type="text" placeholder="Updated species of the pet" name="species" class="infoInput"/><br>

                <label for="breed">Breed of pet:</label><br>
                <input type="text" placeholder="Updated breed of the pet" name="breed" class="infoInput"/><br>
                
                <label for="sterilized">Sterilized:</label>
                <input type="checkbox" placeholder="Was the pet sterilized?" name="sterilized" class="infoInput"/><br>

                <label for="health">Health of pet:</label><br>
                <textarea type="text" placeholder="Updated information about the health of the pet" name="health" class="infoInput healthInput"></textarea><br>

                <label for="descriptions">Description:</label><br>
                <textarea type="text" placeholder="Updated description of the pet" name="descriptions" class="infoInput descriptionInput"></textarea><br>

                <button>Update Pet</button>
            </form>
        </div>
        <script>
            // Get the modal
            var modal = document.getElementById('updateForm');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


    </body>
    @endsection

</html>