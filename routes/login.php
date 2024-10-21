<?php
session_start(); // Start the session

// Check if the user is already logged in
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    header("Location: user_profile.php"); // Redirect to user profile if already logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login - Academic Record Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #003366;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #003366;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Login</h1>
        <form method="POST" action="">
            <label for="roll_no">Roll No:</label>
            <input type="text" id="roll_no" name="roll_no" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <?php
        // Handle login submission
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Database connection parameters
            $servername = "localhost";
            $dbname = "academic_record";  // Replace with your database name
            $username_db = "root";        // Replace with your MySQL username
            $password_db = "";            // Replace with your MySQL password

            // Connect to the database
            $conn = new mysqli($servername, $username_db, $password_db, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Get roll number and password from the form
            $roll_no = $_POST['roll_no'];
            $password = $_POST['password'];

            // Prepare SQL statement
            $stmt = $conn->prepare("SELECT * FROM students WHERE roll_no = ? AND password = ?");
            $stmt->bind_param("ss", $roll_no, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if user exists
            if ($result->num_rows > 0) {
                // Login successful, store session data
                $_SESSION['user_logged_in'] = true;
                $_SESSION['roll_no'] = $roll_no; // Store roll number in session

                // Redirect to user profile page
                header("Location: user_profile.php");
                exit(); // Make sure to exit after the redirect
            } else {
                echo "<p style='color:red;'>Invalid roll number or password!</p>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
