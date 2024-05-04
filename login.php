<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Establish connection to MySQL database
    $servername = "localhost";
    $username = "root";
    $db_password = "0000"; // Rename this variable to avoid conflict with the input password
    $dbname = "camp";

    // Create connection
    $conn = new mysqli($servername, $username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query with prepared statement
    $sql = "SELECT * FROM user WHERE email=? AND password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        header("Location: index.php");
        //nlanci une session , save mdp + username 
        //session start , 2 variables , $sessionlogin , $sessionpassword 
        exit();
    } else {
        header("Location: login.html");
        echo $conn->error; // Add this line to display any MySQL errors
        exit();
    }

    $conn->close();
}
?>