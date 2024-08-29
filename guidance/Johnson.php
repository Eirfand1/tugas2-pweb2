<?php
require_once 'Guidance.php';

class Johnson extends Guidance{
   public function showData(){
      $data = $this->conn->query("SELECT guidance.*, students.name
      FROM guidance
      INNER JOIN students ON students.id_student = guidance.id_student WHERE guidance.id_student=1 ") or die($this->conn->error);

      return $data;
   }
   
}