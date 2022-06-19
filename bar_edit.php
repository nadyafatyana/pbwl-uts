<?php

require_once "app/Koneksi.php";
require_once "app/Barang.php";

$id = $_GET['id'];

$bar = new Barang();
$row = $bar->edit($id);

?>
<h2>Edit Data Barang</h2>
<form action="bar_proses.php" method="post">
<input type="hidden" name="id_barang" value="<?php echo $id; ?>">
    <table>
    <tr>
        <td>ID Barang</td>
        <td><input type="text" name="id_barang"></td>
    </tr>
    <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nama_barang"></td>
    </tr>
    <tr>
        <td>Kategori Barang</td>
        <td><input type="text" name="kat_barang"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn_update" value="UPDATE"></td>
    </tr>
    </table>
</form>