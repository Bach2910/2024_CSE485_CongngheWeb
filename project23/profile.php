<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to if not authenticated
}
$username = $_SESSION['user_id'];
$users = [
    [
        "username" => "nothing",
        "password" => password_hash("123456", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Nothing",
        "email" => "NOTHINGHAPPEN@gmail.com",

    ],
    [
        "username" => "ChaGio",
        "password" => password_hash("nomoney12", PASSWORD_DEFAULT), // Store hashed password
        "name" => "ban cha gio",
        "email" => "BanChaGio123o@gmail.com"
    ],
    [
        "username" => "test",
        "password" => password_hash("testing123", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Just testing",
        "email" => "hello123@gmail.com"
    ],

];

// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user) {
    // Display user information
    echo "Welcome, ".$user['name']."!";
    echo "<br>Email: ".$user['email'];
    // ... display other user details
} else {
    echo "Error: User not found.";
}

?>

<form action="logout.php" method="post" enctype="multipart/form-data">
    <br>
    <br>
    <button type="submit">Click Here to out</button>
