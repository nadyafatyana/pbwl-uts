<?php

require_once "app/Koneksi.php";
require_once "app/Post.php";

$id = $_GET['id'];

$pos = new Post();
$row = $pos->edit($id);

?>
<h2>Edit Data Post</h2>
<form action="pos_proses.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $id; ?>">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="text" name="post_id_cat"></td>
        </tr>
        <tr>
            <td>SLUG</td>
            <td><input type="text" name="post_slug"></td>
        </tr>
        <tr>
            <td>JUDUL</td>
            <td><input type="text" name="post_title"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><input type="text" name="post_text"></td>
        </tr>
        <tr>
            <td>TANGGAL</td>
            <td><input type="date" name="post_date"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
</form>