<!-- Donation Modal -->
<div id="donationModal" class="modal">
    <form class="modal-content animate" action="{{ route('donate') }}" method="post" onsubmit="event.preventDefault(); openThankYouModal();">
    @csrf
    <div class="modal-container">
        <!-- Close button inside the modal container -->
        <div class="imgcontainer">
            <span onclick="closeDonationModal()" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">
            <h2>Donate to Help Animals</h2>
            <p>Please enter your credit card details to make a donation.</p>
    
            <label for="cardNumber"><b>Credit Card Number</b></label>
            <input type="text" placeholder="Enter Credit Card Number" name="cardNumber" required>
    
            <label for="expiryDate"><b>Expiry Date</b></label>
            <input type="text" placeholder="MM/YY" name="expiryDate" required>
    
            <label for="cvv"><b>CVV</b></label>
            <input type="text" placeholder="Enter CVV" name="cvv" required>
    
            <label for="amount"><b>Enter desired amount</b></label>
            <input type="text" placeholder="Amount" name="amount" required>
    
            <button class="modalButton" type="submit">Donate</button>
        </div>
    </div>
</form>
    </div>
    <div id="thankYouModal" class="modal">
        <div class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="closeThankYouModal()" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
                <h2>Thank You for Your Donation!</h2>
                <p>Your support helps make a difference in the lives of animals. We appreciate your kindness.</p>
                <a class="button" href="/">Go Back to Home</a>
            </div>
        </div>
    </div>

    <!-- Modal Login Form -->
    <script>
        // Get the modals
        var donationModal = document.getElementById("donationModal");
        var thankYouModal = document.getElementById("thankYouModal");
    
        // Function to open donation modal
        function openDonationModal() {
            donationModal.style.display = "block";
        }
    
        // Function to close donation modal
        function closeDonationModal() {
            donationModal.style.display = "none";
        }
    
        // Function to open thank you modal after donation is completed
        function openThankYouModal() {
            donationModal.style.display = "none";  // Close the donation modal
            thankYouModal.style.display = "block";  // Open the thank you modal
        }
    
        // Function to close thank you modal
        function closeThankYouModal() {
            thankYouModal.style.display = "none";
        }
    </script>
