<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "enrollment_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $enrollment_date = $_POST['enrollment_date'];

    $sql = "INSERT INTO students (first_name, last_name, email, course, enrollment_date)
            VALUES ('$first_name', '$last_name', '$email', '$course', '$enrollment_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
header("Location: index.php");
exit();
?>