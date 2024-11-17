<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <link rel="stylesheet" href="../../assets/css/textColors.css">
        <link rel="stylesheet" href="../../assets/css/registration.css">
    </head>

    <body class="backImage">
        @extends('layout')

        @section('content')
        <div class="centerBox">
            <div class="backDrop">
                <form action="{{ route('registerPush') }}" method="post">
                    @csrf

                    <p class="chooseText darkOrange">Choose a username:</p>
                    <input type="text" name="uname" placeholder="Username" required>

                    <p class="chooseText darkOrange">Choose a password:</p>
                    <input type="password" name="password" placeholder="Password" required>

                    <p class="chooseText darkOrange">Enter your code:</p>
                    <input type="text" name="code" placeholder="Code" required>

                    <!-- Fields for volunteers -->
                    <div id="volunteerFields" style="display: none;">
                        <p class="chooseText darkOrange">Enter your email:</p>
                        <input type="email" name="email" placeholder="Email">

                        <p class="chooseText darkOrange">Enter your phone number:</p>
                        <input type="tel" name="phone_number" placeholder="Phone Number">

                        <p class="chooseText darkOrange">Tell us more about yourself:</p>
                        <textarea name="more_about" placeholder="Tell us more..." rows="4"></textarea>
                    </div>

                    <br>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>

        <script>
            // Show additional fields if the volunteer code is entered
            const codeInput = document.querySelector('input[name="code"]');
            const volunteerFields = document.getElementById('volunteerFields');

            codeInput.addEventListener('input', () => {
                if (codeInput.value === '1234') { // Check for volunteer code
                    volunteerFields.style.display = 'block';
                } else {
                    volunteerFields.style.display = 'none';
                }
            });
        </script>
        @endsection
    </body>
</html>
