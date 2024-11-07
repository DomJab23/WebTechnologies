<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../../assets/css/registration.css">
    </head>

    <body>
        <form action="{{ route('registerPush') }}" method="post">
            @csrf
            <input type="text" name="uname" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="code" placeholder="Code">
            <button>Submit</button>
        </form>
    </body>
</html>