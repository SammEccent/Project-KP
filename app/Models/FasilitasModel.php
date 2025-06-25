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

    public function getAllFasilitas() {
        $this->db->prepare("SELECT f.*, j.nama AS jenis_nama FROM fasilitas f LEFT JOIN jenis j ON f.jenis_id = j.id ORDER BY f.id DESC");
        return $this->db->fetchAll();
    }

    public function getAllJenis() {
        $this->db->prepare("SELECT * FROM jenis ORDER BY nama ASC");
        return $this->db->fetchAll();
    }

    public function insertFasilitas($data) {
        $this->db->prepare("INSERT INTO fasilitas (nama, slug, jenis_id, alamat, kontak, link_map, deskripsi, admin_id, dibuat_pada) VALUES (:nama, :slug, :jenis_id, :alamat, :kontak, :link_map, :deskripsi, :admin_id, NOW())");
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':jenis_id', $data['jenis_id']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':kontak', $data['kontak']);
        $this->db->bind(':link_map', $data['link_map']);
        $this->db->bind(':deskripsi', $data['deskripsi']);
        $this->db->bind(':admin_id', $data['admin_id']);
        $this->db->execute();
        return $this->db->getLastInsertId();
    }

    public function updateFasilitas($id, $data) {
        $this->db->prepare("UPDATE fasilitas SET nama = :nama, slug = :slug, jenis_id = :jenis_id, alamat = :alamat, kontak = :kontak, link_map = :link_map, deskripsi = :deskripsi, admin_id = :admin_id, diupdate_pada = NOW() WHERE id = :id");
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':slug', $data['slug']);
        $this->db->bind(':jenis_id', $data['jenis_id']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':kontak', $data['kontak']);
        $this->db->bind(':link_map', $data['link_map']);
        $this->db->bind(':deskripsi', $data['deskripsi']);
        $this->db->bind(':admin_id', $data['admin_id']);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function deleteFasilitas($id) {
        $this->db->prepare("DELETE FROM fasilitas WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }
}