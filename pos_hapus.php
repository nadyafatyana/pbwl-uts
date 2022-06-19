<?php

require_once "app/Koneksi.php";
require_once "app/Post.php";

$id = $_GET['id'];

$pos = new Post();
$rows = $pos->hapus($id);

?>

Data Berhasil dihapus!

<a href="pos_tampil.php">Kembali</a>