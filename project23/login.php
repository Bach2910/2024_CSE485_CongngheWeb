
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form action="process_login.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="username" required>
    <br>

    <label for="email">Email:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
</body>
</html>