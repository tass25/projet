<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (!empty($_POST["name"]) && !empty($_POST["object"]) && !empty($_POST["message"])) {
        // Database credentials
        $servername = 'localhost'; // Your database server name or IP address
        $username = 'root'; // Your database username
        $password = '0000'; // Your database password
        $dbname = 'camp'; // Your database name

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize the input data
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $object = mysqli_real_escape_string($conn, $_POST["object"]);
        $message = mysqli_real_escape_string($conn, $_POST["message"]);

        // Prepare the SQL statement to insert the complaint into the database
        $sql = "INSERT INTO complaint (name, object, message) VALUES ('$name', '$object', '$message')";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Error submitting review. Please try again later.");</script>';

            header("Location:contactus.php");
        } 
       

        // Close the connection
        $conn->close();
    } else {
        header("Location:contactus.php");
    }
}
?>