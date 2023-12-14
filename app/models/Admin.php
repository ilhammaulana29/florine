<?php

namespace App\Models;

use App\Core\Model;

class Admin extends Model

{

    public function show()
    {
          $query = "SELECT * FROM tb_admin";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
    }

    public function save()
    {
          $id_admin = $_POST['id'];
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $alamat = $_POST['alamat'];
          $no_telp = $_POST['no_telp'];

          $sql = "INSERT INTO tb_admin
          SET id_admin=:id_admin, nama=:nama, email=:email, alamat=:alamat, no_telp=:no_telp";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id_admin",$id_admin);
          $stmt->bindParam(":nama",$nama);
          $stmt->bindParam(":email",$email);
          $stmt->bindParam(":alamat",$alamat);
          $stmt->bindParam(":no_telp",$no_telp);

          $stmt->execute();
    }

    public function edit($id)
    {
          $query = "SELECT * FROM tb_admin WHERE id_admin=:id_admin";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id_admin", $id);
          $stmt->execute();

          return $this->select($stmt);
    }

    public function update()
    {
          $id = $_POST['id_admin'];
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $alamat = $_POST['alamat'];
          $no_telp = $_POST['no_telp'];

          if (!empty($password)) {
                $sql = "UPDATE tb_admin
                SET id_admin=:id_admin, nama=:nama, email=:email, alamat=:alamat, no_telp=:no_telp
                WHERE id_admin=:id_admin";
          } else {
                $sql = "UPDATE tb_admin
                SET id_admin=:id_admin, nama=:nama, email=:email, alamat=:alamat, no_telp=:no_telp
                WHERE id_admin=:id_admin";
          }

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id_admin", $id);
          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":email", $email);
          $stmt->bindParam(":alamat", $alamat);
          $stmt->bindParam(":no_telp", $no_telp);

          $stmt->execute();
    }

    public function delete($id)
    {
          $sql = "DELETE FROM tb_admin WHERE id_admin=:id_admin";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id_admin", $id);
          $stmt->execute();
    }
}
