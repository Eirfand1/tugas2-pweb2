<?php

class Database {
   private $host, $username, $password, $db;
   protected $conn;
   
   public function __construct(){
      $this->host = 'localhost';
      $this->username = 'root';
      $this->password = '';
      $this->db = 'tugas2';
      
      $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db) ;
      
      if ($this->conn->connect_error) {
         die("Koneksi gagal: " . $this->conn->connect_error);
      }
   }
   
   public function showData(){
   }
}





