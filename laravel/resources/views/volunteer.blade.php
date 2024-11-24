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
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    <tr>
                        <td>{{ $pet->id }}</td>
                        <td>{{ $pet->name }}</td>
                        <td>{{ $pet->age }}</td>
                        <td>{{ $pet->species }}</td>
                        <td>{{ $pet->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="split left flexBox">
        <div class="sideBox">
            <h2>Choose a Pet to Volunteer For</h2>

            <form action="{{ route('volunteerPet') }}" method="POST">
                @csrf
                <label for="pet_id" style="font-size: 18px;">Select a pet:</label><br>
                <select name="pet_id" class="infoInput" style="font-size: 16px; padding: 5px;">
                    @foreach($pets as $pet)
                        @if($pet->status == 'AVAILABLE')
                            <option value="{{ $pet->id }}">{{ $pet->name }} (ID: {{ $pet->id }})</option>
                        @endif
                    @endforeach
                </select><br>
                <button style="margin-top: 10px; font-size: 16px;">Volunteer</button>
            </form>

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
                    @foreach($volunteeringPets as $pet)
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->status }}</td>
                        </tr>
                    @endforeach
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
