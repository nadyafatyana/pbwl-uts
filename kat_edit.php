<?php

require_once "app/Koneksi.php";
require_once "app/Kategori.php";

$id = $_GET['id'];

$kat = new Kategori();

$row = $kat->edit($id);

?>
<h2>Edit Data Kategori</h2>
<form action="kat_proses.php" method="post">
    <input type="hidden" name="cat_id" value="<?php echo $id; ?>">
    <table>
    <tr>
        <td>NAMA</td>
        <td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
    </tr>
    <tr>
        <td>KATEGORI</td>
        <td><input type="text" name="cat_text" value="<?php echo $row['cat_text']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn_update" value="UPDATE"></td>
    </tr>
    </table>
</form>