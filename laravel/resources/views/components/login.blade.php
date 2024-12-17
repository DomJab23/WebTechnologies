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