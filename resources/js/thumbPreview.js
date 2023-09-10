const thumbnailInput = document.getElementById('thumbnailInput');
const thumbnailPreview = document.getElementById('thumbnailPreview');

// Add an event listener to the input element
thumbnailInput.addEventListener('change', function() {
    // Check if a file is selected
    if (thumbnailInput.files && thumbnailInput.files[0]) {
        // Create a FileReader object to read the file
        const reader = new FileReader();

        // Set up a listener for when the file is loaded
        reader.onload = function(e) {
            // Set the src attribute of the image to the data URL
            thumbnailPreview.src = e.target.result;
            // Display the image
            thumbnailPreview.style.display = 'block';
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(thumbnailInput.files[0]);
    } else {
        // Clear the image source and hide it
        thumbnailPreview.src = '';
        thumbnailPreview.style.display = 'none';
    }
});