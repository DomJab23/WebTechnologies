<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETAPP</title>
    <link rel="icon" href="../../assets/photos/PetApp-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/layout.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <link rel="stylesheet" href="../../assets/css/registration.css">
    <link rel="stylesheet" href="../../assets/css/aboutUsPage.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <link rel="stylesheet" href="../../assets/css/gallery.css">
    <link rel="stylesheet" href="../../assets/css/petmanagement.css">
    <link rel="stylesheet" href="../../assets/css/modals.css">
    <link rel="stylesheet" href="../../assets/css/volunteer.css">
</head>
<body>
    <!-- Login Modal -->
    <x-login>
    </x-login>
    
    <!-- Navbar Section -->
    <x-navbar>
    </x-navbar>

    <div class="barspace"></div>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <x-footer>
    </x-footer>
</body>
</html>
