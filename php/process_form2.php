<?php

echo "<div class='success-message'>process_form2.php activated</div>";

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ss_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate form data
    $first_name = sanitize_input($_POST['first_name']);
    $last_name = sanitize_input($_POST['last_name']);
    $email = sanitize_input($_POST['email']);
    $phone_number = sanitize_input($_POST['phone_number']);
    $lead_source = sanitize_input($_POST['lead_source']);
    $project_name = sanitize_input($_POST['project_name']);
    // Check if services field is set and not empty
    if (isset($_POST['services']) && is_array($_POST['services'])) {
        // Convert array to comma-separated string
        $services = implode(', ', $_POST['services']);
    } else {
        // If no services are selected, set $services to an empty string or handle accordingly
        $services = '';
    }
    $budget = sanitize_input($_POST['budget']);
    $description = sanitize_input($_POST['description']);

    // Insert data into database
    $sql = "INSERT INTO contact_form (first_name, last_name, email, phone_number, lead_source, project_name, services, budget, description)
            VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$lead_source', '$project_name', '$services', '$budget', '$description')";

    if ($conn->query($sql) === TRUE) {
        // Email notification
        $to = "kristan.kek@gmail.com";
        $subject = "New Contact Form Submission";
        $message = "A new contact form submission has been received.\n\n";
        $message .= "First Name: $first_name\n";
        $message .= "Last Name: $last_name\n";
        $message .= "Email: $email\n";
        $message .= "Phone Number: $phone_number\n";
        $message .= "Lead Source: $lead_source\n";
        $message .= "Project Name: $project_name\n";
        $message .= "Services: $services\n";
        $message .= "Budget: $budget\n";
        $message .= "Description: $description\n";

        // mail($to, $subject, $message);
        
        // Send success message
        echo "<div class='success-message'>Form submitted successfully. Thank you!</div>";
    } else {
        // Send error message
        echo "<div class='error-message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
} else {
    // Send error message if form submission method not allowed
    echo "<div class='error-message'>Form submission method not allowed</div>";
}

// Close database connection
$conn->close();
?>
