<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETAPP</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="icon" href="{{ asset('assets/photos/PetApp-favicon.png') }}" type="image/x-icon">
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <a href="/" class="logo" style="background-image: url('{{ asset('assets/photos/PETAPP.png') }}');"></a>
        <ul class="navbar_menu">
            <li class="navbar_menu_item"><a href="/" class="navbar_menu_link">Home</a></li>
            <li class="navbar_menu_item"><a href="/about" class="navbar_menu_link">About</a></li>
            <li class="navbar_menu_item"><a href="/gallery" class="navbar_menu_link">Gallery</a></li>
            <li class="navbar_menu_item"><a href="/contacts" class="navbar_menu_link">Contacts</a></li>
            <li class="navbar_menu_item"><a href="/more" class="navbar_menu_link">More</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 PETAPP. All rights reserved.</p>
        <p>Follow us on social media for updates!</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
