// DISPLAYING FORM MESSAGE UNDER THE SUBMIT BUTTON WITHOUT RELOADING THE PAGE
// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
    // Get the form element
    const form = document.getElementById("contact-form");

    // Add form submit event listener
    form.addEventListener("submit", function (event) {
        // Prevent default form submission behavior
        event.preventDefault();

        // Serialize form data
        const formData = new FormData(form);

        // Send AJAX request
        fetch(form.action, {
            method: "POST",
            body: formData
        })
        .then(response => response.json()) // Parse JSON response
        .then(data => {
            // Display success or error message
            const messageContainer = document.getElementById("form-response");
            if (data.success) {
                messageContainer.innerHTML = "<p>Form submitted successfully. Thank you!</p>";
            } else {
                messageContainer.innerHTML = "<p>Error: " + data.error + "</p>";
            }
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });
});