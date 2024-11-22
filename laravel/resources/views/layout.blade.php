<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PETAPP</title>
    <!--<link rel="stylesheet" href="../../assets/css/app.css">-->
    <link rel="icon" href="../../assets/photos/PetApp-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/layout.css">
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
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
            <li class="navbar_menu_item"><button class="loginButton" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>
        </ul>
    </nav>

    <div class="barspace"></div>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>
    <!--Footer-->
<footer class="footer">
    <!-- Logo and Text -->
        <div class="footer-section logo-section">
            <a >
                <img src="{{ asset('assets/photos/petapp-logo-white.png') }}" alt="PETAPP Logo" class="footer-logo">
            </a>
            <p class="footer-text">Check our socials!</p>
            <!-- Social media icons with links to each social media platform -->
            <div class="social-media-icons">
                <a href="https://www.facebook.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/facebook-app-round-white-icon.png') }}" alt="FB" />
                </a>
                <a href="https://www.tiktok.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/tiktok-white-icon.png') }}" alt="TT" />
                </a>
                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/instagram-white-icon.png') }}" alt="IG" />
                </a>
                <a href="https://www.tiktok.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/linkedin-app-white-icon.png') }}" alt="LI" />
                </a>
            </div>
        </div>
    <!-- Contact Information -->
    <div class="footer-section contact-section">
        <h4>Contact Information</h4>
        <p>Email: contact@petapp.com</p>
        <p>Phone: +45 123 123 123</p>
        <p>Address: Alsion 2, 6400 Sønderborg</p>
    </div>
    <!-- Newsletter Signup in Footer -->
    <div class="footer-section newsletter-section">
      <h4>Newsletter</h4>
      <p>Subscribe to our newsletter for updates.</p>
      <form class="newsletter-form">
        <input type="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
  </footer>

    <script src="script.js"></script>
</body>
</html>
