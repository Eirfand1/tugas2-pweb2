<?php
require_once 'Guidance.php';
require_once 'Johnson.php';
 $guidance= new Guidance();
 $guidance_data = $guidance->showData();

 $johnson = new Johnson();
 $johson_data = $johnson->showData();
 require_once '../component/header.php';
?>
<body>
   <?php require_once '../component/navbar.php' ?>

   
   <div class="m-5">
    <p>
      <button id="all">Lihat data semua</button>
      <button id="johnson">Lihat data johnson</button>
    </p>
     <table id="myTable" class="table table-striped">
        <thead>
            <tr>
               <th>No</th>
               <th>Nama siswa</th>
               <th>Masalah</th>
               <th>Solusi</th>
            </tr>
         </thead>
         <tbody class="semua">
            <?php $i=1; foreach($guidance_data as $data) : ?>
            <tr>
               <td><?= $i++?></td>
               <td><?= $data['name'] ?></td>
               <td><?= $data['problem'] ?></td>
               <td><?= $data['solution'] ?></td>
            </tr>
            <?php endforeach?>
         </tbody>
         <tbody class="johnson">
            <?php $i=1; foreach($johson_data as $data) : ?>
            <tr>
               <td><?= $i++?></td>
               <td><?= $data['name'] ?></td>
               <td><?= $data['problem'] ?></td>
               <td><?= $data['solution'] ?></td>
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
      $(".johnson").hide();

      $("#all").on("click", (e)=>{
         e.preventDefault();
         $(".johnson").hide();
         $(".semua").show();
      });     

      $("#johnson").on("click", (e)=>{
         e.preventDefault();
         $(".semua").hide();
         $(".johnson").show();
      });
   })
</script>
