<?php  

require_once "app/Koneksi.php";

    session_start();
    session_destroy();
    header("Location:login.php");

?>