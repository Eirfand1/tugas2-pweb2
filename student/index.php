<?php
 require_once 'Student.php';
 require_once 'Kelas101.php';

$kelas101 = new Kelas101();
$data_kelas101 = $kelas101->showData();


 $student = new Student();
 $data_student = $student->showData();
 require_once '../component/header.php';
?>
<body>
   <?php require_once '../component/navbar.php' ?>

   <div class="m-5">
      <p>
         <button id="all">Lihat data semua</button>
         <button id="kelas101">Lihat data kelas 101</button>
      </p>
      <table id="myTable" class="table table-striped mb-5">
         <thead>
            <tr>
               <th>No</th>
               <th>Nama siswa</th>
               <th>NIM</th>
               <th>Kelas</th>
               <th>No HP</th>
               <th>Alamat</th>
               <th>ttd</th>
            </tr>
         </thead>
         <tbody class="semua">
            <?php $i=1; foreach($data_student as $data) : ?>
            <tr>
               <td><?=$i++?></td>
               <td><?= $data['name'] ?></td>
               <td><?= $data['student_number'] ?></td>
               <td><?= $data['id_class'] ?></td>
               <td><?= $data['phone_number'] ?></td>
               <td><?= $data['address'] ?></td>
               <td><?= $data['signature'] ?></td>
            </tr>
            <?php endforeach?>
         </tbody>
         <tbody class="kelas101">
            <?php $i=1; foreach($data_kelas101 as $data) : ?>
            <tr>
               <td><?=$i++?></td>
               <td><?= $data['name'] ?></td>
               <td><?= $data['student_number'] ?></td>
               <td><?= $data['id_class'] ?></td>
               <td><?= $data['phone_number'] ?></td>
               <td><?= $data['address'] ?></td>
               <td><?= $data['signature'] ?></td>
            </tr>
            <?php endforeach?>
         </tbody>
     </table>
   </div>
   
   
<?php

require_once '../component/footer.php';
?>

<script>
   $(document).ready(() => {
      $(".kelas101").hide();

      $("#all").on("click", (e)=>{
         e.preventDefault();
         $(".kelas101").hide();
         $(".semua").show();
      });     

      $("#kelas101").on("click", (e)=>{
         e.preventDefault();
         $(".semua").hide();
         $(".kelas101").show();
      });
   })

   

</script>
