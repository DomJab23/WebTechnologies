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
    <link rel="stylesheet" href="../../assets/css/app.css">
    <link rel="stylesheet" href="../../assets/css/textColors.css">
    <link rel="stylesheet" href="../../assets/css/welcome.css">
    <link rel="stylesheet" href="../../assets/css/headings.css">
    <link rel="stylesheet" href="../../assets/css/gallery.css">
    <link rel="stylesheet" href="../../assets/css/petmanagement.css">
    <link rel="stylesheet" href="../../assets/css/modals.css">
</head>
<body>
    <!-- Modal Login Form -->
    <div id="loginForm" class="modal">
        <form class="modal-content animate" action="{{ route('login') }}" method="post">
            @csrf
                <span onclick="document.getElementById('loginForm').style.display='none'" class="close-x" title="Close Login">&times;</span>
                <h1>Sign in to your account.</h1>
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input class="loginInput" type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input class="loginInput" type="password" placeholder="Enter Password" name="psw" required>
                <br>
                <br>
                <button type="submit" class="modal-button">Login</button>
                <br>
                <label for="register"><b>If you don't have an account:</b></label>
                <button type="submit" class="modal-button" onclick="window.location.href='/register';">Sign Up</button>
            </div>
        </form>
    </div>

    <script>
        // Get the modal
        var modalLogin = document.getElementById('loginForm');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalLogin) {
                modalLogin.style.display = "none";
            }
        }
    </script>
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
            @auth
                @if (Auth::user()->usertype=='volunteer')
                    <li class="navbar_menu_item">
                        <a href="/volunteer" class="navbar_menu_link">Volunteer</a>
                    </li>
                    <li class="navbar_menu_item">
                        <a href="logout">
                            <button class="modal-button" style="width:auto;">Logout</button>
                        </a>
                    </li>
                @elseif (Auth::user()->usertype=='admin')
                    <li class="navbar_menu_item">
                        <a href="/management" class="navbar_menu_link">Management</a>
                    </li>
                    <li class="navbar_menu_item">
                        <a href="logout">
                            <button class="loginButton" style="width:auto;">Logout</button>
                        </a>
                    </li>
                @endif
            @else
                <li class="navbar_menu_item">
                    <button class="loginButton" onclick="document.getElementById('loginForm').style.display='block'" style="width:auto;">Login</button>
                </li>
            @endauth
        </ul>
    </nav>

    <div class="barspace"></div>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <!-- Logo and text about social media under the logo-->
        <div class="footer-section">
            <a>
                <img src="{{ asset('assets/photos/petapp-logo-white.png') }}" alt="PETAPP Logo" class="footer-logo">
            </a>
            <p class="footer-text">Check our socials!</p>
            <!-- Social media icons with links to each social media platform -->
            <div class="social-media-icons">
                 <!--Facebook-->
                <a href="https://www.facebook.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/facebook-app-round-white-icon.png') }}" alt="FB" />
                </a>
                 <!--Tiktok-->
                <a href="https://www.tiktok.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/tiktok-white-icon.png') }}" alt="TT" />
                </a>
                 <!--Instagram-->
                <a href="https://www.instagram.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/instagram-white-icon.png') }}" alt="IG" />
                </a>
                 <!--LinkedIn-->
                <a href="https://www.linkedin.com" target="_blank" class="social-icon">
                    <img src="{{ asset('assets/photos/linkedin-app-white-icon.png') }}" alt="LI" />
                </a>
            </div>
        </div>
        <!-- Contact Information -->
        <div class="footer-section">
            <p class="footer-text">Contact Information</p>
            <p class="contact">Email: contact@petapp.com</p>
            <p class="contact">Phone: +45 123 123 123</p>
            <p class="contact">Address: Alsion 2, 6400 Sønderborg</p>
        </div>
        <!-- Newsletter Signup in Footer -->
        <div class="footer-section">
            <p class="footer-text">Newsletter</p>
            <p class="contact" >Subscribe to our newsletter for updates.</p>
            <br>
            <form class="newsletter-form" id="footerModal">
                <input class="newsletter_input" type="email" id="email" name="email" placeholder="Enter your e-mail here" required>
                <button class="button" type="submit">Subscribe</button>
            </form>
        </div>
    </footer>
</body>
</html>
