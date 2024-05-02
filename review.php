<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the review is not empty
    if (!empty($_POST["user_review"])) {
        // Database credentials
        $servername = 'localhost'; // Your database server name or IP address
        $username = 'root'; // Your database username
        $password = ''; // Your database password
        $dbname = 'camp'; // Your database name

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL statement to insert the review into the database
        $review = $_POST["user_review"];
        $sql = "INSERT INTO review (message) VALUES ('$review')";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {

            header("Location: index.php");
            exit();
               
        }

        // Close the connection
        $conn->close();
    } else {
        echo "Please enter a review.";
    }
}
?>