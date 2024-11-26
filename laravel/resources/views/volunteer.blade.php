@extends('layout')

@section('title', 'Volunteer')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETAPP</title>
    <link rel="icon" href="../../assets/photos/PetApp-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/volunteer.css">
</head>

<section class="pet-menagement">
    <div class="pet-add">
        <p>Volunteer for Pets:</p>
        <table>
            <thead style="font-size: 20px">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Species</th>
                    <th>Status</th>
                    <th>Action</th>
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
                        <td>
                            @if($pet->status === 'AVAILABLE')
                                <form 
                                    action="{{ route('volunteerPet') }}" 
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                                    <button>Volunteer</button>
                                </form>
                            @elseif($pet->status === 'PENDING' && $pet->volunteer_user_id == auth()->id())
                                <form 
                                    action="{{ route('unvolunteerPet') }}" 
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                                    <button>Unvolunteer</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pet-table">
        <p>Pets you are volunteering for:</p>
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
</section>

<script>
    var modalVolunteer = document.getElementById('volunteerForm');
    window.onclick = function(event) {
        if (event.target == modalVolunteer) {
            modalVolunteer.style.display = "none";
        }
    }
</script>

@endsection
