<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthDate = $_POST['birthDate'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate if passwords match
    if ($password !== $confirmPassword) {
        echo "Error: Passwords do not match";
        exit();
    }

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $dbpassword = "0000"; // Rename this variable to avoid conflict with the input password
    $dbname = "camp";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement to insert data into the database table
    $stmt = $conn->prepare("INSERT INTO user (first_name, last_name, birth_date, phone_number, email, password) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameters and execute the statement
    $stmt->bind_param("ssssss", $firstName, $lastName, $birthDate, $phone, $email, $password);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        header("Location: register.html");
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>