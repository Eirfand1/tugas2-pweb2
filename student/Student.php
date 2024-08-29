<?php
require_once '../config/Database.php';


class Student extends Database{
   
   public function showData(){
      $data =  $this->conn->query("SELECT * FROM students") or die($this->conn->error);
      return $data;
   }
   
}