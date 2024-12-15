<!-- Modal -->
<div id="newsletterModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close-x" id="closeModal">&times;</span>
        <h1>Welcome to our Newsletter!</h1>
        <br>
        <p class="thank-text">Now you will now receive updates about our latest news and activities</p>
        <br>
        <button class="modal-button" onclick="closeNewsletterModal()">Go Back to Home</button>
    </div>
</div>

<script>
function toggleModal(modalId, show = true) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.style.display = show ? 'flex' : 'none';
    }
}

// Close Modal on Button Click
document.getElementById('closeModal').addEventListener('click', function () {
    toggleModal('newsletterModal', false);
});

// Newsletter Form Submission
document.getElementById('newsletterForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const emailInput = document.getElementById('email');
    const errorMessage = document.getElementById('error-message');

    // Validate Email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailRegex.test(emailInput.value)) {
        if (errorMessage) errorMessage.style.display = 'none';
        toggleModal('newsletterModal', true); // Open modal
    } else {
        if (errorMessage) errorMessage.style.display = 'block'; // Show error message
    }
});
function closeNewsletterModal() {
        newsletterModal.style.display = "none";
    }
</script>