<?php
session_start(); // Start session

$users = [
    [
        "username" => "nothing",
        "password" => password_hash("123456", PASSWORD_DEFAULT), // Store hashed password
    ],
    [
        "username" => "ChaGio",
        "password" => password_hash("nomoney12", PASSWORD_DEFAULT), // Store hashed password
    ],
    [
        "username" => "test",
        "password" => password_hash("testing123", PASSWORD_DEFAULT), // Store hashed password
    ],
    [
        "username" => "otakuso1",
        "password" => password_hash("otaku123", PASSWORD_DEFAULT), // Store hashed password
    ]

];

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username exists
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_id'] = $user['username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
    header('Location: profile.php'); // Redirect to profile page
    exit;
} else {
    // Login failed
    echo "Invalid username or password.";
}
?>