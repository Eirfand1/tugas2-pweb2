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

class Student extends Database{
   
   public function showData(){
      $data =  $this->conn->query("SELECT * FROM students") or die($this->conn->error);
      return $data;
   }
   
}

class Guidance extends Database{
   public function showData(){
      $data = $this->conn->query("SELECT guidance.*, students.name
      FROM guidance
      INNER JOIN students ON students.id_student = guidance.id_student") or die($this->conn->error);

      return $data;
   }
   
}



// $student = new Student();
// $data_student = $student->showData();

$gui = new Guidance();
$data_gui = $gui->showData();

$student = new Student();
$data_student = $student->showData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student</title>
</head>
<body>
   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>No</th>
         <th>Nama Siswa</th>
         <th>Masalah</th>
         <th>Solusi</th>
      </tr>
      <?php $i = 1; foreach($data_gui as $data) : ?>
      <tr>
            <td><?= $i++?></td>
            <td><?=$data['name']?></td>
            <td><?=$data['problem']?></td>
            <td><?=$data['solution']?></td>
      </tr>
      <?php endforeach?>
   </table> 
   <br>

   <table border="1" cellpadding="10" cellspacing="0">
      <tr>
         <th>No</th>
         <th>ID Class</th>
         <th>Student Number</th>
         <th>Name</th>
         <th>Phone Number</th>
         <th>Address</th>
         <th>Signature</th>
      </tr>
      <?php $i = 1; foreach($data_student as $data) : ?>
      <tr>
            <td><?= $i++ ?></td>
            <td><?= $data['id_class'] ?></td>
            <td><?= $data['student_number'] ?></td>
            <td><?= $data['name'] ?></td>
            <td><?= $data['phone_number'] ?></td>
            <td><?= $data['address'] ?></td>
            <td><?= $data['signature'] ?></td>
      </tr>
      <?php endforeach ?>
   </table> 
</body>
</html>