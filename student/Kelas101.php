<?php 
require_once 'Student.php';

class Kelas101 extends Student{
   public function showData(){
      $data =  $this->conn->query("SELECT * FROM students WHERE id_class=101") or die($this->conn->error);
      return $data;
   }
}
