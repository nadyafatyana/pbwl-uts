<?php

require_once "app/Koneksi.php";
require_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();
$rows = $kat->hapus($id);

?>

Data Berhasil dihapus!

<a href="kat_tampil.php">Kembali</a>