<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETAPP</title>
    <!--<link rel="stylesheet" href="../../assets/css/app.css">-->
    <link rel="icon" href="../../assets/photos/PetApp-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/layout.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar" id="navbar">
        <div class="logo-container">
            <a href="/">
                <img src="{{ asset('assets/photos/PETAPP.png') }}" alt="PETAPP Logo" class="logo">
            </a>
        </div>
        <ul class="navbar_menu">
            <li class="navbar_menu_item"><a href="/" class="navbar_menu_link">Home</a></li>
            <li class="navbar_menu_item"><a href="/about" class="navbar_menu_link">About</a></li>
            <li class="navbar_menu_item"><a href="/gallery" class="navbar_menu_link">Gallery</a></li>
            <li class="navbar_menu_item"><a href="/contacts" class="navbar_menu_link">Contacts</a></li>
            <li class="navbar_menu_item"><a href="/more" class="navbar_menu_link">More</a></li>
            @auth
                <li class="navbar_menu_item"><a href="/management" class="navbar_menu_link">Management</a></li>
                <li class="navbar_menu_item"><a href="logout"><button class="loginButton" style="width:auto;">Logout</button></a></li>
            @else
                <li class="navbar_menu_item"><button class="loginButton" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
            @endauth
            
        </ul>
    </nav>

    <div class="barspace"></div>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="script.js"></script>
</body>
</html>
