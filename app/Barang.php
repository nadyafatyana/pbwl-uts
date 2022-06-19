<?php

require_once "Koneksi.php";

class Barang extends Koneksi {
    
    public function tampil () {
        $sql = "SELECT * FROM tb_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan(){
        $nama_barang = $_POST['nama_barang'];
        $kat_barang = $_POST['kat_barang'];

        $sql = "INSERT INTO tb_barang (nama_barang, kat_barang) VALUES (:nama_barang, :kat_barang)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_barang", $nama_barang);
        $stmt->bindParam(":kat_barang ", $kat_barang);
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM tb_barang WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update() {
        $nama_barang = $_POST['nama_barang'];
        $kat_barang = $_POST['kat_barang'];
        $id_barang = $_POST['id_barang'];

        $sql = "UPDATE tb_barang SET nama_barang=:nama_barang, kat_barang=:kat_barang WHERE id_barang=:id_barang,";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":nama_barang", $nama_barang);
        $stmt->bindparam(":kat_barang", $kat_barang);
        $stmt->bindparam(":id_barang", $id_barang);
    }

    public function hapus($id) {
        $sql = "DELETE FROM tb_barang WHERE id_barang=:id_barang";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_barang", $id);
        $stmt->execute();
    }
}
