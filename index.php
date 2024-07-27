<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Overall styling */
        body {
            
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            margin: 0;
            padding: 0;
        }

        /* Form container */
        #form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Form labels */
        label {
            font-weight: bold;
        }

        /* Input fields */
        input[type="text"],
        input[type="email"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Submit button */
        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
   <h1>Student Enrollment</h1>
    <div id="form">
        <form action="insert.php" method="POST">
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" required><br>
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="course">Course:</label><br>
            <input type="text" id="course" name="course" required><br>
            <label for="enrollment_date">Enrollment Date:</label><br>
            <input type="date" id="enrollment_date" name="enrollment_date" required><br><br>
            <input type="submit" value="Submit">
            <button onclick="goToNextPage()">view database</button>
        </form>
    </div>
</body>
</html>
<script>
        function goToNextPage() {
            // Customize this function to navigate to the desired next page
            // For now, let's simulate going to a new URL:
            window.location.href = 'dbview.php';
        }
    </script>