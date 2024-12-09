@extends('layout')

@section('title', 'User Manager')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETAPP</title>
    <link rel="icon" href="../../assets/photos/PetApp-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/petmanagement.css">
</head>
    <section class="pet-menagement">
        
    <div class="pet-add">
            <p>Add user:</p>
            <form action="{{ route('userAdd') }}" method="POST">
                @csrf
                <label for="name">Username:</label><br>
                <input type="text" placeholder="Username" name="uname" class="infoInput"/><br>

                <label for="age">Code:</label><br>
                <input type="number" placeholder="Age of the pet" name="age" class="infoInput"/><br>

                <label for="species">Password:</label><br>
                <input type="text" placeholder="Species of the pet" name="species" class="infoInput"/><br>

                <button>Add User</button>
            </form><br><br>
            <p>Delete User:</p>
            <form action="{{ route('userDelete') }}" method="POST">
                @csrf
                <input type="number" placeholder="Id of the user to delete" name="id" class="infoInput"/><br>
                <button>Delete User</button>
            </form><br><br>
        </div>
        <div>
        

        <div class="pet-table">
        <p>Users:</p>

        <!-- Table of users-->
        <table>
            <thead style="font-size:20px">
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <!--<th></th>-->
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->uname }}</td>
                        <td>{{ $user->password }}</td>
                        {{--<!--<td>
                            <input type="hidden" name="id" value="{{ $pet->id }}">
                            <button 
                                onclick="
                                document.getElementById('updateForm').style.display='block';

                                document.getElementById('petId').value='{{ $pet->id }}';
                                document.getElementById('petName').value='{{ $pet->name }}';
                                document.getElementById('petAge').value='{{ $pet->age }}';
                                document.getElementById('petSpecies').value='{{ $pet->species }}';
                                document.getElementById('petBreed').value='{{ $pet->breed }}';
                                @if($pet->sterilized)
                                document.getElementById('petSterilized').checked=true;
                                @else
                                document.getElementById('petSterilized').checked=false;
                                @endif
                                document.getElementById('petHealth').value='{{ $pet->health }}';
                                document.getElementById('petDescriptions').value='{{ $pet->descriptions }}';
                                " 
                                style="width:auto;">Update</button>
                        </td>-->--}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

    </section>













    

    

    <!--Modal Update Form-->
    <div id="updateForm" class="modal">
        <form class="modal-content animate" action="{{ route('petUpdate') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('updateForm').style.display='none'" class="close" title="Close Window">&times;</span>
            </div>

            <!-- Id of animal being updated -->
            <input type="hidden" placeholder="Id of the pet to update" name="id" id="petId" class="infoInput"/>

            <label for="name">Name of pet:</label><br>
            <input type="text" placeholder="Updated name of the pet" name="name" id="petName" class="infoInput"/><br>

            <label for="age">Age of pet:</label><br>
            <input type="number" placeholder="Updated age of the pet" name="age" id="petAge" class="infoInput"/><br>

            <label for="species">Species of pet:</label><br>
            <input type="text" placeholder="Updated species of the pet" name="species" id="petSpecies" class="infoInput"/><br>

            <label for="breed">Breed of pet:</label><br>
            <input type="text" placeholder="Updated breed of the pet" name="breed" id="petBreed" class="infoInput"/><br>
            
            <label for="sterilized">Sterilized:</label>
            <input type="checkbox" placeholder="Was the pet sterilized?" name="sterilized" id="petSterilized" class="infoInput"/><br>

            <label for="health">Health of pet:</label><br>
            <textarea type="text" placeholder="Updated information about the health of the pet" name="health" id="petHealth" class="infoInput healthInput"></textarea><br>

            <label for="descriptions">Description:</label><br>
            <textarea type="text" placeholder="Updated description of the pet" name="descriptions" id="petDescriptions" class="infoInput descriptionInput"></textarea><br>

            <button class="modalButton">Update Pet</button>
        </form>
    </div>
@endsection
