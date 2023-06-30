<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orphancare";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve form data
$message = $_POST['message'];
$question = $_POST['question'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// Insert form data into the database
$sql = "INSERT INTO form_contact_us (message, question, name, phone, email) VALUES ('$message', '$question', '$name', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Thank you for reaching out to us! Your message has been submitted successfully.Talk to you soon, and have a great day!");';
    echo 'window.location.href = "home.php";</script>';
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
