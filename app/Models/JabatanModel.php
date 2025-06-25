<?php
class JabatanModel {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
    public function getAll() {
        $this->db->prepare("SELECT * FROM jabatan ORDER BY level ASC, nama ASC");
        return $this->db->fetchAll();
    }
} 