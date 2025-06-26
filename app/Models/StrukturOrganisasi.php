<?php


class StrukturOrganisasi {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        $sql = "SELECT so.*, j.nama AS jabatan_nama, a.nama AS anggota_nama, a.foto AS anggota_foto, atasan.jabatan_id AS atasan_jabatan_id, atasan.id AS atasan_id, j2.nama AS atasan_jabatan_nama
                FROM struktur_organisasi so
                LEFT JOIN jabatan j ON so.jabatan_id = j.id
                LEFT JOIN anggota a ON so.anggota_id = a.id
                LEFT JOIN struktur_organisasi atasan ON so.atasan_id = atasan.id
                LEFT JOIN jabatan j2 ON atasan.jabatan_id = j2.id
                ORDER BY so.urutan ASC, j.level ASC, j.nama ASC";
        $this->db->prepare($sql);
        return $this->db->fetchAll();
    }

    public function getById($id) {
        $this->db->prepare("SELECT * FROM struktur_organisasi WHERE id = ?");
        $this->db->bind(1, $id);
        return $this->db->fetch();
    }

    public function create($data) {
        $this->db->prepare("INSERT INTO struktur_organisasi (jabatan_id, anggota_id, atasan_id, urutan) VALUES (?, ?, ?, ?)");
        $this->db->bind(1, $data['jabatan_id']);
        $this->db->bind(2, $data['anggota_id']);
        $this->db->bind(3, $data['atasan_id']);
        $this->db->bind(4, $data['urutan']);
        return $this->db->execute();
    }

    public function update($id, $data) {
        $this->db->prepare("UPDATE struktur_organisasi SET jabatan_id = ?, anggota_id = ?, atasan_id = ?, urutan = ? WHERE id = ?");
        $this->db->bind(1, $data['jabatan_id']);
        $this->db->bind(2, $data['anggota_id']);
        $this->db->bind(3, $data['atasan_id']);
        $this->db->bind(4, $data['urutan']);
        $this->db->bind(5, $id);
        return $this->db->execute();
    }

    public function delete($id) {
        $this->db->prepare("DELETE FROM struktur_organisasi WHERE id = ?");
        $this->db->bind(1, $id);
        return $this->db->execute();
    }

    public function getByAnggotaId($anggota_id) {
        $this->db->prepare("SELECT * FROM struktur_organisasi WHERE anggota_id = ?");
        $this->db->bind(1, $anggota_id);
        return $this->db->fetch();
    }

    public function getByAtasanId($atasan_id) {
        $this->db->prepare("SELECT * FROM struktur_organisasi WHERE atasan_id = ?");
        $this->db->bind(1, $atasan_id);
        return $this->db->fetch();
    }
} 