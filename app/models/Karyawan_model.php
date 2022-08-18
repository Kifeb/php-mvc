<?php

class Karyawan_model{
    private $table = 'karyawan';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getKaryawan(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKaryawanById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);

        return $this->db->single();
    }

    public function tambahDataKaryawan($data){
        $query = "INSERT INTO karyawan VALUES ('', :name, :nrp, :email, :jabatan, :foto )";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('foto', $data['foto']);

        $this->db->execute();

        return $this->db->countRow();
    }
    public function hapusDataKaryawan($id){
        $query = "DELETE FROM karyawan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->countRow();
    }

    public function ubahDataKaryawan($data){
        $query = "UPDATE karyawan SET name = :name, nrp = :nrp, email = :email, jabatan = :jabatan, foto = :foto WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->countRow();
    }

    public function cariKaryawan()
    {
        $keyword = $_POST["keyword"];
        $query = "SELECT * FROM karyawan WHERE name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}