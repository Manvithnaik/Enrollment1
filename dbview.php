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

// SQL query with prepared statement
$sql = "SELECT id, first_name, last_name, email, course, enrollment_date FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Check if there are results
if ($result->num_rows > 0) {
    ?>
    <html>
    <head>
        <title>Student Enrollment List</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f0f0f0;
            }
        </style>
    </head>
    <body>
        <h1>Student Enrollment List</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Enrollment Date</th>
            </tr>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= htmlspecialchars($row["id"]) ?></td>
                <td><?= htmlspecialchars($row["first_name"]) ?></td>
                <td><?= htmlspecialchars($row["last_name"]) ?></td>
                <td><?= htmlspecialchars($row["email"]) ?></td>
                <td><?= htmlspecialchars($row["course"]) ?></td>
                <td><?= htmlspecialchars($row["enrollment_date"]) ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
    </html>
    <?php
} else {
    echo "0 results";
}

// Close connection
$stmt->close();
$conn->close();
?>