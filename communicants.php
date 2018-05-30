<?php
require_once 'core/init.php';
include 'includes/head.php';
 include 'includes/navigate.php';
 include 'helpers.php';

 ?>

<div class="container">


 <h1 class="text-center top"><b>Communicants</b></h1><hr>


 <div class="clearfix"></div>
 <br>
 </div>
 <?php
   $display ="SELECT * FROM members WHERE communicant like 'yes' AND deleted=0";
   $disp=$db->query($display);
   $count1=mysqli_num_rows($disp);

  ?>

<h2 class="text-center description1"><strong>All Communicants</strong></h2>
<br>
<div class="container-padded">
<div class="row">

<div class="col-md-12">

 <h3 class="text-center count ">--Showing :<?=$count1;  ?> members</h3><br><br>
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


 <?php
 $display1 ="SELECT * FROM members WHERE communicant like 'no'";
 $disp1=$db->query($display1);
$count=mysqli_num_rows($disp1);
 ?>
  ?
 <br>
 <br><br><br><br><br><br>

 <div class="row">
 <div class="col-md-12">

 <h2 class="text-center description1"><strong>All Non Communicants</strong></h2>
 <br><br>
 <h3 class="text-center count ">--Showing :<?=$count;  ?> members</h3><br><br>

  <table class="table table-bordered table-condensed table-striped">
      <thead><th>ID</th><th>Firstname</th><th>Lastname</th><th>Date Of Birth</th><th>Gender</th><th>Occupation</th><th>Telephone</th><th>House Number</th><th>Adrress</th><th>Church leader</th><th>Generational Group</th><th>Intrest Group</th><th>Communicant</th></thead>
      <tbody>
        <?php while($view1 =mysqli_fetch_assoc($disp1)): ?>
          <tr>

            <td><?=$view1['id'] ?></td>
            <td><?=$view1['firstname'] ?></td>
            <td><?=$view1['lastname'] ?></td>
            <td><?=$view1['bdate'] ?></td>
            <td><?=$view1['gender'] ?></td>
            <td><?=$view1['occupation'] ?></td>
            <td><?=$view1['telephone'] ?></td>
            <td><?=$view1['house'] ?></td>
            <td><?=$view1['address'] ?></td>
            <td><?=$view1['church_leader'] ?></td>
            <td><?=$view1['gen_group'] ?></td>
            <td><?=$view1['intrest_group'] ?></td>
            <td><?=$view1['communicant'] ?></td>
          <?php endwhile; ?>
      </tbody>
  </table>
</div>
</div>


  </div>

 <?php include 'includes/footer.php'; ?>
