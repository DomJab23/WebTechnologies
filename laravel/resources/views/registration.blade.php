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
        <div class="centerBox">
            <div class="backDrop">
                <form action="{{ route('registerPush') }}" method="post">
                    @csrf
                    <p class="chooseText darkOrange">Choose a username:</p>
                    <input type="text" name="uname" placeholder="Username">

                    <p class="chooseText darkOrange">Choose a password:</p>
                    <input type="password" name="password" placeholder="Password">

                    <p class="chooseText darkOrange">Enter your code:</p>
                    <input type="text" name="code" placeholder="Code">
                    <br>
                    <button>Register</button>
                </form>
            </div>
        </div>
    </body>
</html>