
<?php
session_start(); // Start session
$username = $_POST['username'];
$password = $_POST['password'];

$user = null;
$users = [[
"username" => "johndoe",
"password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashed password
"name" => "John Doe",
"email" => "johndoe@example.com"
]

];
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}
if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
               header('Location: profile.php'); // Redirect to profile page
} else {

    echo "Invalid username or password.";
}
?>