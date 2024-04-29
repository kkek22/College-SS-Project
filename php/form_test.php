<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ss_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display "Connection established" message
echo '<div class="form-response">Connection established</div>';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form submitted
    echo '<div class="form-response">Form submitted</div>';
}

// Rest of your existing code
?>