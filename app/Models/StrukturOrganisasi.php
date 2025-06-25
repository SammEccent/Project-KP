<?php

namespace App\Models;

use App\Core\Database;

class StrukturOrganisasi {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll() {
        $sql = "SELECT so.*, p.jabatan AS parent_jabatan_nama
                FROM struktur_organisasi so
                LEFT JOIN struktur_organisasi p ON so.parent_id = p.id
                ORDER BY so.urutan ASC, so.jabatan ASC";
        
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM struktur_organisasi WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($data) {
        $sql = "INSERT INTO struktur_organisasi (jabatan, nama_pejabat, parent_id, urutan) 
                VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssii", 
            $data['jabatan'],
            $data['nama_pejabat'],
            $data['parent_id'],
            $data['urutan']
        );
        return $stmt->execute();
    }

    public function update($id, $data) {
        $sql = "UPDATE struktur_organisasi 
                SET jabatan = ?, nama_pejabat = ?, parent_id = ?, urutan = ? 
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ssiii", 
            $data['jabatan'],
            $data['nama_pejabat'],
            $data['parent_id'],
            $data['urutan'],
            $id
        );
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM struktur_organisasi WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
} 