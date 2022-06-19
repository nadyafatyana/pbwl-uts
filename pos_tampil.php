<?php


require_once "app/Koneksi.php";
require_once "app/Post.php";

$pos = new Post();
$rows = $pos->tampil();

?>

<h2>Data Post</h2>

<a href="pos_input.php">Tambah Data</a>

<table border="1" width="80%" style="background-color: yellow";>
    <tr>
        <th align="center">NO</th>
        <th>ID KATEGORI</th>
        <th>SLUG</th>
        <th>JUDUL</th>
        <th>KETERANGAN</th>
        <th>DATE</th>
        <th>EDIT</th>
        <th>HAPUS</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_id_cat']; ?></td>
        <td><?php echo $row['post_slug']; ?></td>
        <td><?php echo $row['post_title']; ?></td>
        <td><?php echo $row['post_text']; ?></td>
        <td><?php echo $row['post_date']; ?></td>
        <td><a href="pos_edit.php?id=<?php echo $row['post_id']; ?>">Edit</a></td>
        <td><a href="pos_hapus.php?id=<?php echo $row['post_id']; ?>">Hapus</a></td>
    </tr>
    <?php } ?>
</table>