<?php
include "config/connection.php";
if (isset ($_GET['WRONG'])){
    echo "<script>alert('Admin tidak ditemukan')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <form action="proseslogin.php" method="post">
    <div class="titlte">Login Admin</div>
    <div class="body">
        <div class="uname">
            <label for="username">Username</label>
            <input type="text" name="uname" id="username"><br/>
        </div>
        <div class="upass">
            <label for="userpass">Kata sandi</label>
            <input type="text" name="upass" id="userpass">
        </div>
    </div>
    <div class="footer">
        <input type="submit" value="Login" name="login" class="btnlogin">
    </div>
    </form>
</body>
</html>