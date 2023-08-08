<?php
$servername = 'localhost';
$username = getenv('DB_USERNAME'); // Use environment variable for username
$password = getenv('DB_PASSWORD'); // Use environment variable for password
$dbname = 'micoh';
$table = 'subscribe';

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists and select it
if (!mysqli_select_db($conn, $dbname)) {
    die("Database selection failed: " . mysqli_error($conn));
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $company = $_POST["company"];

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO $table (email, company) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $company);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Subscription successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
