<!-- Donation Modal -->
<div id="donationModal" class="modal" style="display: none;">
    <div class="modal-content animate">
        <div class="container">
            <span class="close-x" onclick="closeDonationModal()" class="close" title="Close Modal">&times;</span>
            <h1>Donate to Help Animals</h1>
            <p>Please enter your credit card details to make a donation.</p>
            <form id="paymentForm">
                <label for="cardNumber"><b>Credit Card Number</b></label>
                <input class="text" type="number" id="cardNumber" placeholder="Enter Credit Card Number" name="cardNumber" maxlength="16" required>

                <label for="expiryDate"><b>Expiry Date</b></label>
                <input type="month" id="expiryDate" placeholder="MM/YY" name="expiryDate" required>

                <label for="cvv"><b>CVV</b></label>
                <input type="number" id="cvv" placeholder="Enter CVV" name="cvv" maxlength="4" required>

                <label for="amount"><b>Enter Desired Amount</b></label>
                <input type="number" id="amount" placeholder="Amount" name="amount" maxlength="10"required>

                <button class="modal-button"type="submit">Donate</button>
            </form>
        </div>
    </div>
</div>

<!-- Thank You Modal -->
<div id="thankYouModal" class="modal" style="display: none;">
    <div class="modal-content animate">
        <div class="container">
            <span class="close-x" onclick="closeThankYouModal()" title="Close Modal">&times;</span>
            <h1>Thank You!</h1>
            <br>
            <p class="thank-text">Your support helps make a difference in the lives of animals. We appreciate your kindness.</p>
            <br>
            <button class="modal-button onclick="closeThankYouModal()">Go Back to Home</button>
        </div>
    </div>
</div>

<!-- Script -->
<script>
    // Get modals
    const donationModal = document.getElementById("donationModal");
    const thankYouModal = document.getElementById("thankYouModal");

    // Open donation modal
    function openDonationModal() {
        donationModal.style.display = "block";
    }

    // Close donation modal
    function closeDonationModal() {
        donationModal.style.display = "none";
    }

    // Open thank you modal
    function openThankYouModal() {
        donationModal.style.display = "none"; // Close donation modal
        thankYouModal.style.display = "block"; // Show thank you modal
    }

    // Close thank you modal
    function closeThankYouModal() {
        thankYouModal.style.display = "none";
    }

    // Enforce input restrictions
    document.getElementById('cardNumber').addEventListener('input', function (event) {
        const value = event.target.value;
        if (value.length > 16) {
            event.target.value = value.slice(0, 16); // Limit to 16 digits
        }
    });

    document.getElementById('cvv').addEventListener('input', function (event) {
        const value = event.target.value;
        if (value.length > 4) {
            event.target.value = value.slice(0, 4); 
        }
    });
    document.getElementById('amount').addEventListener('input', function (event) {
        const value = event.target.value;
        if (value.length > 1000000000) {
            event.target.value = value.slice(0, 1000000000); 
        }
    });

    // Add event listener for form submission
    document.getElementById('paymentForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent page reload

        const cardNumber = document.getElementById('cardNumber').value.trim();
        const expiryDate = document.getElementById('expiryDate').value;
        const cvv = document.getElementById('cvv').value.trim();
        const amount = document.getElementById('amount').value.trim();

        // Credit Card Number Validation (16 digits)
        if (cardNumber.length !== 16 || isNaN(cardNumber)) {
            alert('Please enter a valid 16-digit credit card number.');
            return;
        }

        // Expiry Date Validation (MM/YYYY)
        if (!expiryDate) {
            alert('Please select a valid expiry date.');
            return;
        }

        const [expiryYear, expiryMonth] = expiryDate.split('-').map(Number);
        const today = new Date();
        const currentYear = today.getFullYear();
        const currentMonth = today.getMonth() + 1; // JavaScript months are 0-indexed

        if (
            expiryYear < currentYear || 
            (expiryYear === currentYear && expiryMonth < currentMonth)
        ) {
            alert('The expiry date must be in the future.');
            return;
        }

        // CVV Validation (3 or 4 digits)
        if (cvv.length < 3 || cvv.length > 4 || isNaN(cvv)) {
            alert('Please enter a valid CVV (3 or 4 digits).');
            return;
        }

        // Amount Validation (positive number)
        if (isNaN(amount) || parseFloat(amount) <= 0) {
            alert('Please enter a valid positive donation amount.');
            return;
        }

        // If all validations pass, show thank you modal
        openThankYouModal();
    });

    // Close modal on outside click (optional)
    window.onclick = function (event) {
        if (event.target === donationModal) {
            closeDonationModal();
        } else if (event.target === thankYouModal) {
            closeThankYouModal();
        }
    };
</script>



