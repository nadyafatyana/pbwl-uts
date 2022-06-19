<?php 

require_once "app/Koneksi.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="layouts/assets/css/login.css">
</head>

<body>
    <form action="proses.php" method="post">
    <h2>Form Login</h2>
    <label>Username</label>
    <input type="text" name="username" placeholder="username"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="password"><br>

    <button type="submit">Login</button>
    </form>
</body>

</html>