<?php

require_once "app/Koneksi.php";
require_once "app/Post.php";

$pos = new Post();

if (isset($_POST['btn_simpan'])){
    $pos->simpan();
    header("location:pos_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $pos->update();
    header("location:pos_tampil.php");
}