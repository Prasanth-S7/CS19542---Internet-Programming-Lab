<?php
// Database connection parameters
$servername = "localhost";
$dbname = "academic_record"; // Name of your database
$username_db = "root"; // Database username
$password_db = ""; // Database password

// Connect to the database
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the input username and password
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT password FROM students WHERE roll_no = ?");
    
    // Check if prepare() was successful
    if ($stmt === false) {
        die("MySQL Error: " . $conn->error);  // Display the MySQL error message
    }

    $stmt->bind_param("s", $roll_no);
    
    // Execute the query
    $stmt->execute();
    $stmt->store_result();

    // Check if the username exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        
        // Verify the password
        if (password_verify($password, $hashed_password)) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Username not found!";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid request method!";
}

// Close the connection
$conn->close();
?>



