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
        @csrf
            <input class="newsletter_input" type="email" id="email" name="email" placeholder="Enter your e-mail here" required>
            <button class="button" type="submit">Subscribe</button>
        </form>
    </div>
</footer>