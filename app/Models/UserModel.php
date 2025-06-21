<?php

class UserModel{
    private $db;
    private $table = 'admin';

    public function __construct() {
        // Initialize the database connection
        $this->db = new Database();
    }

    // Method to get user data by username
    public function getUserByUsername($username) {
        $this->db->prepare("SELECT * FROM {$this->table} WHERE username = :username");
        $this->db->bind(':username', $username);
        // $this->db->execute(); // TIDAK PERLU MEMANGGIL INI LAGI DI SINI
                               // Karena metode fetch() di kelas Database sudah memanggilnya secara internal.

        // Panggil metode fetch() dari objek Database Anda
        return $this->db->fetch(); // <-- SOLUSI: Panggil metode public fetch()
     
    }

    


}