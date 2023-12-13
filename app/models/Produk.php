<?php

namespace App\Models;

use App\Core\Model;

class Produk extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_produks";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_produk = $_POST['nama_produk'];
            $deskripsi_produk = $_POST['deskripsi_produk'];
            $harga_produk = $_POST['harga_produk'];
            $kategori_produk = $_POST['kategori_produk'];

            $sql = "INSERT INTO tb_produks
            SET nama_produk=:nama_produk, 
            deskripsi_produk=:deskripsi_produk, 
            harga_produk=:harga_produk, 
            kategori_produk=:kategori_produk";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_produk", $nama_produk);
            $stmt->bindParam(":deskripsi_produk", $deskripsi_produk);
            $stmt->bindParam(":harga_produk", $harga_produk);
            $stmt->bindParam(":kategori_produk", $kategori_produk);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_produks WHERE id_produk=:id_produk";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_produk", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama_produk = $_POST['nama_produk'];
            $deskripsi_produk = $_POST['deskripsi_produk'];
            $harga_produk = $_POST['harga_produk'];
            $kategori_produk = $_POST['kategori_produk'];
            $id = $_POST['id_produk'];

            $sql = "UPDATE tb_produks
            SET nama_produk=:nama_produk, 
            deskripsi_produk=:deskripsi_produk, 
            harga_produk=:harga_produk, 
            kategori_produk=:kategori_produk
            WHERE id_produk=:id_produk";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_produk", $nama_produk);
            $stmt->bindParam(":deskripsi_produk", $deskripsi_produk);
            $stmt->bindParam(":harga_produk", $harga_produk);
            $stmt->bindParam(":kategori_produk", $kategori_produk);
            $stmt->bindParam(":id_produk", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_produks WHERE id_produk=:id_produk";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_produk", $id);
            $stmt->execute();
      }
}
