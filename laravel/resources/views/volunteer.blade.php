<!DOCTYPE html>
<html lang="en">
<head>
    <title>Volunteer Manager</title>
    <link rel="stylesheet" href="../../assets/css/volunteermanagement.css">
</head>

@extends('layout')

@section('title', 'Volunteer Manager')

@section('content')

<body>
    <div class="split left flexBox">
        <div class="sideBox">
            <p>Volunteer for a pet:</p>
            <form action="{{ route('volunteerPet') }}" method="POST">
                @csrf
                <label for="pet_id">Choose a pet to volunteer for:</label><br>
                <select name="pet_id" class="infoInput">
                    @foreach($pets as $pet)
                        @if($pet->status == 'AVAILABLE')
                            <option value="{{ $pet->id }}">{{ $pet->name }} (ID: {{ $pet->id }})</option>
                        @endif
                    @endforeach
                </select><br>
                <button>Volunteer</button>
            </form>
        </div>

        <div class="split right">
            <p>Pets in the shelter:</p>

            <table>
                <thead style="font-size:20px">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Species</th>
                    <th>Status</th>
                    <th>Volunteer</th>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->age }}</td>
                            <td>{{ $pet->species }}</td>
                            <td>{{ $pet->status }}</td>
                            <td>
                                @if($pet->status == 'AVAILABLE')
                                    <form action="{{ route('volunteerPet') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                                        <button type="submit">Volunteer</button>
                                    </form>
                                @elseif($pet->status == 'PENDING')
                                    <span>Volunteer status: PENDING</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="volunteerForm" class="modal">
        <form class="modal-content animate" action="{{ route('volunteerPet') }}" method="POST">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('volunteerForm').style.display='none'" class="close" title="Close Window">&times;</span>
            </div>

            <label for="pet_id">Choose a pet to volunteer for:</label><br>
            <select name="pet_id" class="infoInput">
                @foreach($pets as $pet)
                    @if($pet->status == 'AVAILABLE')
                        <option value="{{ $pet->id }}">{{ $pet->name }} (ID: {{ $pet->id }})</option>
                    @endif
                @endforeach
            </select><br>

            <button class="modalButton">Volunteer</button>
        </form>
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
