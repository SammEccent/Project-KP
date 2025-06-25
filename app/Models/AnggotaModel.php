<?php
class AnggotaModel {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function getAll() {
        $this->db->prepare("SELECT * FROM anggota WHERE status = 'active' ORDER BY nama ASC");
        return $this->db->fetchAll();
    }
    public function getById($id) {
        $this->db->prepare("SELECT * FROM anggota WHERE id = ?");
        $this->db->bind(1, $id);
        return $this->db->fetch();
    }
    public function create($data) {
        $this->db->prepare("INSERT INTO anggota (nama, foto, kontak, bio, status) VALUES (?, ?, ?, ?, ?)");
        $this->db->bind(1, $data['nama']);
        $this->db->bind(2, $data['foto'] ?? null);
        $this->db->bind(3, $data['kontak'] ?? null);
        $this->db->bind(4, $data['bio'] ?? null);
        $this->db->bind(5, $data['status'] ?? 'active');
        return $this->db->execute();
    }
    public function update($id, $data) {
        $this->db->prepare("UPDATE anggota SET nama = ?, foto = ?, kontak = ?, bio = ?, status = ? WHERE id = ?");
        $this->db->bind(1, $data['nama']);
        $this->db->bind(2, $data['foto'] ?? null);
        $this->db->bind(3, $data['kontak'] ?? null);
        $this->db->bind(4, $data['bio'] ?? null);
        $this->db->bind(5, $data['status'] ?? 'active');
        $this->db->bind(6, $id);
        return $this->db->execute();
    }
    public function delete($id) {
        $this->db->prepare("DELETE FROM anggota WHERE id = ?");
        $this->db->bind(1, $id);
        return $this->db->execute();
    }
} 