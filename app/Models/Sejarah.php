<?php

namespace App\Models;

use App\Core\Database;

class Sejarah {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll() {
        $sql = "SELECT * FROM sejarah ORDER BY tahun ASC";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $sql = "SELECT * FROM sejarah WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($data) {
        $sql = "INSERT INTO sejarah (tahun, judul, deskripsi) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sss", 
            $data['tahun'],
            $data['judul'],
            $data['deskripsi']
        );
        return $stmt->execute();
    }

    public function update($id, $data) {
        $sql = "UPDATE sejarah SET tahun = ?, judul = ?, deskripsi = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sssi", 
            $data['tahun'],
            $data['judul'],
            $data['deskripsi'],
            $id
        );
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM sejarah WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
} 