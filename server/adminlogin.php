<?php
// Database connection parameters
$servername = "localhost";
$dbname = "academic_record";  // Replace with your database name
$username_db = "root";           // Replace with your MySQL username
$password_db = "";               // Replace with your MySQL password

// Start session to track login state
session_start();

// Connect to the database
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement
    $stmt = $conn->prepare("SELECT password FROM admin WHERE username = ?");
    
    if ($stmt === false) {
        die("MySQL Error: " . $conn->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if username exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        // Check if the password matches (no hashing)
        if ($password === $db_password) {
            // Login successful, store admin session
            $_SESSION['admin_logged_in'] = true;

            // Redirect to the specified route
            header("Location: /hostel-dining/routes/studentdetails.php");
            exit(); // Make sure to exit after the redirect
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Admin username not found!";
    }

    $stmt->close();
} else {
    echo "Invalid request method!";
}

$conn->close();
?>
