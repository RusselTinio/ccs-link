function preview(event) {
    const fileInput = event.target;
    const previewImage = document.getElementById('previewImage');

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            previewImage.setAttribute('src', e.target.result);
            previewImage.style.display = 'block';
        };

        reader.readAsDataURL(fileInput.files[0]);
    } else {
        previewImage.removeAttribute('src');
        previewImage.style.display = 'none';
    }
}

function uploadImage(event) {
    event.preventDefault(); // Prevent the form from being submitted immediately

    const fileInput = document.getElementById('userfile');

    if (fileInput.files && fileInput.files[0]) {
        const form = event.target; // Get the form element
        const formData = new FormData(form);

        // Send the image file to the server using Fetch API
        fetch('/upload', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Process the response from the server if needed
            console.log(data);
        })
        .catch(error => console.error('Error:', error));
    } else {
        console.log('No image selected.');
    }
}

