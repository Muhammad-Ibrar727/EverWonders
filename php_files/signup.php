<?php
require_once('server.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate username
    if (empty($username)) {
        die("Username is required!");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email");
    }

    // Validate password
    if (strlen($password) < 6 || !preg_match("/[a-z]/i", $password) || !preg_match("/[0-9]/", $password)) {
        die("Password must be at least 6 characters long and contain at least one letter and one number");
    }

    

 
    $query = "INSERT INTO users (user_name, email, password) VALUES ('$username', '$email', '$password')";

    // Execute the query
    if (mysqli_query($connections, $query)) {
        header("Location: ../index.php");
        exit;
    } else {
        $error_code = mysqli_errno($connections);
        if ($error_code == 1062) {
            die("Email already taken.");
        } else {
            die("Error: " . mysqli_error($connections));
        }
    }
}

mysqli_close($connections);
?>
