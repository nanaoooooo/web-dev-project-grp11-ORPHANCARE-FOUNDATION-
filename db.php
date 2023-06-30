<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orphancare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $knowOrphanCare = $_POST["know_orphan_care"];
    $whyVolunteer = $_POST["why_volunteer"];
    $area = $_POST["area"];

    // Insert the form data into the database
    $sql = "INSERT INTO volunteer_applications (name, age, email, phone, know_orphan_care, why_volunteer, area)
            VALUES ('$name', '$age', '$email', '$phone', '$knowOrphanCare', '$whyVolunteer', '$area')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
     
     echo '<script>alert("Thank you for reaching out to us! You just made our day! Words cannot express how grateful we are for your willingness to volunteer. Your generosity means the world to the people we serve. Once again, a big thank you from all of us and we look forward to meeting you!");';
     echo 'window.location.href = "join.php";</script>';
     exit;
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}

// Close the database connection
mysqli_close($conn);
?>

