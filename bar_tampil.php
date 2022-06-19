<?php

require_once "app/Koneksi.php";
require_once "app/Barang.php";

$bar = new Barang();
$rows = $bar->tampil();

?>
<h2>Data Barang</h2>

<a href="bar_input.php">Tambah Data</a>

<table border="1" width="80%" style="background-color: yellow";>
    <tr>
        <th>ID BARANG</th>
        <th>NAMA BARANG</th>
        <th>KETERANGAN BARANG</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_barang']; ?></td>
        <td><?php echo $row['nama_barang']; ?></td>
        <td><?php echo $row['kat_barang']; ?></td>
        <td><a href="bar_edit.php?id=<?php echo $row['id_barang']; ?>">Edit</a></td>
        <td><a href="bar_hapus.php?id=<?php echo $row['id_barang']; ?>">Hapus</a></td>

    </tr>
    <?php } ?>
</table>

