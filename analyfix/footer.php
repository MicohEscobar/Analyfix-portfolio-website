<footer>
    <div class="container">
        <h3>Stay Updated</h3>
        <p>Subscribe to our newsletter for the latest data science insights.</p>
        <form action="config.php" id="subscribe-form" method="POST">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="company">Company Name:</label>
                <input type="text" id="company" name="company" required>
            </div>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</footer>

<?php
$servername = 'localhost';
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$dbname = 'analyfix';
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
    $stmt = $conn->prepare("INSERT INTO $table (email, company) VALUES (?, ?, ?)");
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
