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
                <input type="number" placeholder="Code of the user" name="age" class="infoInput"/><br>

                <label for="species">Password:</label><br>
                <input type="text" placeholder="Password" name="species" class="infoInput"/><br>

                <button>Add User</button>
            </form><br><br>
            <p>Delete User:</p>
                
            <input type="number" placeholder="Id of the user to delete" name="id" class="infoInput"/><br>
            <button onclick="
                document.getElementById('deleteForm').style.display='block';
            ">Delete User</button>
            <br><br>
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













    

    

    <!--Modal Delete Form-->
    <div id="deleteForm" class="modal">
        <form class="modal-content animate" action="{{ route('userDelete') }}" method="post">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('deleteForm').style.display='none'" class="close" title="Close Window">&times;</span>
            </div>

            <!-- Id of animal being updated -->
            <input type="text" placeholder="User ID" name="id" id="userId" class="infoInput"/>

            <label for="name">Name of pet:</label><br>
            <input type="text" placeholder="User name" name="name" id="userName" class="infoInput"/><br>

            <p>Are you sure you want to delete this user?</p>

            <button class="modalButton">Delete User</button>
        </form>
    </div>
@endsection
