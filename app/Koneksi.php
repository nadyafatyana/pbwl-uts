<?php

class Koneksi{
    public $db;

    public function __construct()
    {
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=uts", "root", "");
        }
        catch(PDOException $e){
            die("Error". $e->getMessage());
        }
    }
}
?>