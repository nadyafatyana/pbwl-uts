<?php

require_once "app/Koneksi.php";
require_once "app/Barang.php";

$id = $_GET['id'];

$bar = new Barang();
$row = $bar->hapus($id);

?>

Data Berhasil dihapus!

<a href="bar_tampil.php">Kembali</a>