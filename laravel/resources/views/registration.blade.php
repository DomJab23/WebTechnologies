<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../../assets/css/registration.css">
    </head>

    <body>
        <form action="{{ route('register') }}" method="post">
            <input type="text" name="uname" placeholder="Username">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="code" placeholder="Code">
        </form>
    </body>
</html>