<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<!-- JavaScript to handle modal display -->
<script>
    document.getElementById('applyBtn').addEventListener('click', function() {
        var myModal = new bootstrap.Modal(document.getElementById('uploadCVModal'));
        myModal.show();
    });

    document.getElementById('uploadForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Close the upload CV modal
        var uploadCVModal = bootstrap.Modal.getInstance(document.getElementById('uploadCVModal'));
        uploadCVModal.hide();

        // Debugging log to check if the modal is closed
        console.log('Modal closed. Redirecting to /activity-student');

        // Redirect to the /profile-student page
        window.location.href = "/activity-student";
    });
</script>