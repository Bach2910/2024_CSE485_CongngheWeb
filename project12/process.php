<?php
if($_SERVER(['REQUEST_METHOD'] == 'POST')){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user = 'qwertyuiop' && $pass = '123'){
        header("Location:admin.php");
    }else{
        header("Location:login.php?error=TRY AGaiN");
    }
}
?>
