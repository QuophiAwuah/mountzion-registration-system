<?php
require_once 'core/init.php';
include 'includes/head.php';
 include 'includes/navigate.php';
 include 'helpers.php';

 ?>

<div class="container">


 <h1 class="text-center top"><b>All Church Leaders</b></h1><hr>


 <div class="clearfix"></div>
 <br>
 </div>
 <?php
   $display ="SELECT * FROM members WHERE church_leader like 'yes' AND deleted=0";
   $disp=$db->query($display);
   $count=mysqli_num_rows($disp);

  ?>


<br>
<div class="container-padded">
<div class="row">

<div class="col-md-12">
  <h3 class="text-center count">Now Showing :<?= $count ;?> members</h3>
<br><br>
 <table class="table table-bordered table-condensed table-striped ">
     <thead><th>ID</th><th>Firstname</th><th>Lastname</th><th>Date Of Birth</th><th>Gender</th><th>Occupation</th><th>Telephone</th><th>House Number</th><th>Adrress</th><th>Church leader</th><th>Generational Group</th><th>Intrest Group</th><th>Communicant</th></thead>
     <tbody>
       <?php while($view =mysqli_fetch_assoc($disp)): ?>
         <tr>

           <td><?=$view['id'] ?></td>
           <td><?=$view['firstname'] ?></td>
           <td><?=$view['lastname'] ?></td>
           <td><?=$view['bdate'] ?></td>
           <td><?=$view['gender'] ?></td>
           <td><?=$view['occupation'] ?></td>
           <td><?=$view['telephone'] ?></td>
           <td><?=$view['house'] ?></td>
           <td><?=$view['address'] ?></td>
           <td><?=$view['church_leader'] ?></td>
           <td><?=$view['gen_group'] ?></td>
           <td><?=$view['intrest_group'] ?></td>
           <td><?=$view['communicant'] ?></td>
         <?php endwhile; ?>
     </tbody>
 </table>
 </div>
</div>



  </div>

 <?php include 'includes/footer.php'; ?>
