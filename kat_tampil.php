<?php

require_once "app/Koneksi.php";
require_once "app/Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>
<h2>Data Kategori</h2>

<a href="kat_input.php">Tambah Data</a>

<table border="1" width="80%" style="background-color: yellow">
    <tr>
        <th>No</th>
        <th>KATEGORI</th>
        <th>KETERANGAN</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['cat_id']; ?></td>
        <td><?php echo $row['cat_name']; ?></td>
        <td><?php echo $row['cat_text']; ?></td>
        <td><a href="kat_edit.php?id=<?php echo $row['cat_id']; ?>">Edit</a></td>
        <td><a href="kat_hapus.php?id=<?php echo $row['cat_id']; ?>">Hapus</a></td>
    </tr>
    <?php } ?>
</table>
