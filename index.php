<?php  
session_start();
require_once "app/Koneksi.php";
    if(empty($_SESSION["username"])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="layouts/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
        selector: '#keterangan'
        });
    </script>
</head>
<body class="bg-light">
    <!-- navbar -->
    <div class="navbar">
        <div class="container">
            <!-- navbar menu -->
            <ul class="nav-menu float-left">
            <img class="icon" src="layouts/assets/img/logo.jpg">
                <li><a href="header.php">Home</a></li>
                <li><a href="bar_tampil.php">Barang</a></li>
                <li><a href="pos_tampil.php">Post</a></li>
                <li><a href="kat_tampil.php">Kategori</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</body>
</html>