<?php

session_start();

$is_invalid = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once('php_files/server.php'); 
    
    $sql = sprintf("SELECT * FROM users WHERE email = '%s'", $connections->real_escape_string($_POST['email']));
    $result = $connections->query($sql);

    // Fetch user data
    $user = $result->fetch_assoc();

    // Verify user
    if ($user) {
        if ($_POST['password'] === $user['password']) {
            // Start session
            session_regenerate_id();
            $_SESSION['user_id'] = $user['id'];

            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
            margin: 0;
        }
        .login-form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .login-form h2 {
            color: #ff6f61;
            margin-bottom: 20px;
        }
        .login-form input {
            display: block;
            width: 90%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .login-form button {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-form button:hover {
            background-color: #e65b54;
        }
        .login-form .error {
            color: red;
            margin-bottom: 15px;
        }
        .login-form .new-user {
            margin-top: 15px;
            color: #007BFF;
        }
        .login-form .new-user a {
            color: #007BFF;
            text-decoration: none;
        }
        .login-form .new-user a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php if ($is_invalid): ?>
            <div class="error">Invalid login</div>
        <?php endif; ?>
        <form method="post" id="loginForm">
            <input type="email" name="email" placeholder="Email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <div class="new-user">New user? <a href="signup.html">Click here to register</a></div>
        </form>
    </div>
</body>
</html>
