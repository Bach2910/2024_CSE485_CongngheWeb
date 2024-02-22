
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_GET['error'])){
        echo"<p style = 'color:red'>{$_GET['error']}</p>";
    }
?>
    <form action="process.php" method="post">
        Username: <input type = "text" name = "user" id = "">
        Password: <input type = "password" name="pass"  id = "">
        <button type = "submit">CLICK IN HERE</button>
    </form>
</body>
</html>
