<?php

require_once "app/Koneksi.php";
require_once "app/Barang.php";

$bar = new Barang();

if (isset($_POST['btn_simpan'])) {
    $bar->simpan();
    header("location:bar_tampil.php");
}

if (isset($_POST['btn_update'])) {
    $bar->update();
    header("location:bar_tampil.php");
}