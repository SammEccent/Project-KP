<?php

class FasilitasModel{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }
    // DONT USE QUERY, USE PREPARE INSTEAD
    // the facilities table has a "jenis_id" which is a FK of "nama" which is in the jenis table
    // get all fasilitas pendidikan
    public function getFasilitasPendidikan(){
        $this->db->prepare("SELECT f.*, j.nama AS jenis_nama FROM fasilitas f JOIN jenis j ON f.jenis_id = j.id WHERE j.nama = 'Pendidikan' ORDER BY f.nama ASC");
        return $this->db->fetchAll();
    }

    // get all fasilitas kesehatan
    public function getFasilitasKesehatan(){
        $this->db->prepare("SELECT f.*, j.nama AS jenis_nama FROM fasilitas f JOIN jenis j ON f.jenis_id = j.id WHERE j.nama = 'Kesehatan' ORDER BY f.nama ASC");
        return $this->db->fetchAll();
    }

    // get all fasilitas ibadah
    public function getFasilitasIbadah(){
        $this->db->prepare("SELECT f.*, j.nama AS jenis_nama FROM fasilitas f JOIN jenis j ON f.jenis_id = j.id WHERE j.nama = 'Ibadah' ORDER BY f.nama ASC");
        return $this->db->fetchAll();
    }

    // get all fasilitas balai warga
    public function getFasilitasBalaiWarga(){
        $this->db->prepare("SELECT f.*, j.nama AS jenis_nama FROM fasilitas f JOIN jenis j ON f.jenis_id = j.id WHERE j.nama = 'Balai Warga' ORDER BY f.nama ASC");
        return $this->db->fetchAll();
    }
    
}