<!DOCTYPE html>
<html lang="en">
<head>
    <title>Volunteer Pet Booking</title>
    <link rel="stylesheet" href="../../assets/css/petmanagement.css">
</head>
<body>
    <div class="split left flexBox">
        <div class="sideBox">
            <h1>Welcome, {{ auth()->user()->name }}</h1>
            <h2>Available Pets for Volunteering</h2>
            <table>
                <thead>
                    <tr>
                        <th>Pet Name</th>
                        <th>Species</th>
                        <th>Age</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->species }}</td>
                            <td>{{ $pet->age }}</td>
                            <td>
                                <form action="{{ route('volunteer.book') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                                    <label for="activity">Choose Activity:</label>
                                    <select name="activity" required>
                                        <option value="walk">Walk</option>
                                        <option value="feeding">Feeding</option>
                                        <option value="playing">Playing</option>
                                    </select>
                                    <br>
                                    <label for="datetime">Choose Date and Time:</label>
                                    <input type="datetime-local" name="datetime" required>
                                    <br>
                                    <button type="submit">Book Slot</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="split right">
        <h3>Booking Confirmation</h3>
        <p>Once you book a slot, the manager will confirm your request. You will be notified once confirmed.</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    </div>
</body>
</html>
