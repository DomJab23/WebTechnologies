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
            @elseif (Auth::user()->usertype=='employee')
                <li class="navbar_menu_item">
                    <a href="/management" class="navbar_menu_link">Management</a>
                </li>
                <li class="navbar_menu_item">
                    <a href="logout">
                        <button class="loginButton" style="width:auto;">Logout</button>
                    </a>
                </li>
            @elseif (Auth::user()->usertype=='admin')
                <li class="navbar_menu_item">
                    <a href="/admin" class="navbar_menu_link">User Management</a>
                </li>
                <li class="navbar_menu_item">
                    <a href="/management" class="navbar_menu_link">Pet Management</a>
                </li>
                <li class="navbar_menu_item">
                    <a href="/volunteer" class="navbar_menu_link">Volunteer</a>
                </li>
                <li class="navbar_menu_item">
                    <a href="/volunteermanager" class="navbar_menu_link">Volunteer Management</a>
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