<?php
// Include the configuration file
require_once 'config.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the database exists and select it
if (!mysqli_select_db($conn, DB_NAME)) {
    die("Database selection failed: " . mysqli_error($conn));
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $name = $_POST["name"]; // Changed variable name to 'name'
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
        $name = isset($_POST["name"]) ? $_POST["name"] : "";
    
        // Check if both email and name are not empty
        if (!empty($email) && !empty($name)) {
            // Prepare and bind the statement
            $stmt = $conn->prepare("INSERT INTO " . TABLE_NAME . " (email, name) VALUES (?, ?)");
            $stmt->bind_param("ss", $email, $name);
    
            // Execute the statement
            if ($stmt->execute()) {
                echo "Subscription successful!";
            } else {
                echo "Error: " . $stmt->error;
            }
    
            // Close the statement
            $stmt->close();
        } else {
            echo "Error: Email and name cannot be empty.";
        }
    }
    

    // Prepare and bind the statement
    $stmt = $conn->prepare("INSERT INTO " . TABLE_NAME . " (email, name) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $name); // Changed variable name to 'name'

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
