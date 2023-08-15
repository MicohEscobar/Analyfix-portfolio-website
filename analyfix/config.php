<?php
// Replace 'your_database_name', 'your_username', 'your_password', and 'your_table_name' with your actual database information.
$servername = 'localhost';
$username = getenv('DB_USERNAME'); // Use environment variable
$password = getenv('DB_PASSWORD');
$dbname = 'micoh';
$table = 'subscribe';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Rest of your code...

?>
