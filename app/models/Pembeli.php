<?php

namespace App\Models;

use App\Core\Model;

class Pembeli extends Model
{

    public function show()
    {
            $query = "SELECT * FROM tb_pembeli";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
    }

    public function save()
    {
            $id = $_POST['id'];
            $nama_user = $_POST['nama_user'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];

            $sql = "INSERT INTO tb_pembeli
            SET pembeli_id=:pembeli_id, pembeli_nama_user=:pembeli_nama_user, pembeli_email=:pembeli_email, pembeli_alamat=:pembeli_alamat, pembeli_no_hp=:pembeli_no_hp";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pembeli_id", $id);
            $stmt->bindParam(":pembeli_nama_user", $nama_user);
            $stmt->bindParam(":pembeli_email", $email);
            $stmt->bindParam(":pembeli_alamat", $alamat);
            $stmt->bindParam(":pembeli_no_hp", $no_hp);

            $stmt->execute();
    }

    public function edit($id)
    {
            $query = "SELECT * FROM tb_pembeli WHERE pembeli_id=:pembeli_id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":pembeli_id", $id);
            $stmt->execute();

            return $this->select($stmt);
    }

    public function update()
    {
            $id = $_POST['id'];
            $nama_user = $_POST['nama_user'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $no_hp = $_POST['no_hp'];

            if (!empty($password)) {
                $sql = "UPDATE tb_pembeli
                SET pembeli_id=:pembeli_id, pembeli_nama_user=:pembeli_nama_user, pembeli_email=:pembeli_email, pembeli_alamat=:pembeli_alamat, pembeli_no_hp=:pembeli_no_hp
                WHERE pembeli_id=:pembeli_id";
            } else {
                $sql = "UPDATE tb_pembeli
                SET pembeli_id=:pembeli_id, pembeli_nama_user=:pembeli_nama_user, pembeli_email=:pembeli_email, pembeli_alamat=:pembeli_alamat, pembeli_no_hp=:pembeli_no_hp
                WHERE pembeli_id=:pembeli_id";
            }

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pembeli_id", $id);
            $stmt->bindParam(":pembeli_nama_user", $nama_user);
            $stmt->bindParam(":pembeli_email", $email);
            $stmt->bindParam(":pembeli_alamat", $alamat);
            $stmt->bindParam(":pembeli_no_hp", $no_hp);

            $stmt->execute();
    }

    public function delete($id)
    {
            $sql = "DELETE FROM tb_pembeli WHERE pembeli_id=:pembeli_id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":pembeli_id", $id);
            $stmt->execute();
    }
}
