<?php
require_once '../config/Database.php';

class Guidance extends Database{
   public function showData(){
      $data = $this->conn->query("SELECT guidance.*, students.name
      FROM guidance
      INNER JOIN students ON students.id_student = guidance.id_student") or die($this->conn->error);

      return $data;
   }
   
}