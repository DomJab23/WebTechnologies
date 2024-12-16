<!DOCTYPE html>
<html lang="en">
<head>
    <title>Volunteer</title>
    <link rel="stylesheet" href="../../assets/css/volunteermanagement.css">
</head>

@extends('layout')

@section('title', 'Volunteer')

@section('content')

<body>

    <div class="split right">
        <h2>Pets in the Shelter</h2>
        <table>
            <thead style="font-size:20px">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Species</th>
                    <th>Status</th>
                    <th>Volunteer</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    @if($pet->status == 'PENDING')
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->age }}</td>
                            <td>{{ $pet->species }}</td>
                            <td>{{ $pet->status }}</td>
                            <td>{{ $pet->volunteer_user_id }}</td>
                            <td>
                                <form action="{{ route('acceptVolunteer') }}" method="post">
                                    @csrf
                                    <input type="text" value="{{ $pet->id }}" placeholder="Id of the pet to update" name="pet_id" id="petId" class="infoInput"/>
                                    <button>Accept</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="split left flexBox">
        <div class="sideBox">
            <h2>Choose a Pet to Volunteer For</h2>

            <h3 style="margin-top: 20px;">Pets You Are Volunteering For</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!--{{--@foreach($volunteeringPets as $pet)
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->status }}</td>
                        </tr>
                    @endforeach--}}-->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        var modalVolunteer = document.getElementById('volunteerForm');
        window.onclick = function(event) {
            if (event.target == modalVolunteer) {
                modalVolunteer.style.display = "none";
            }
        }
    </script>
</body>

@endsection

</html>
