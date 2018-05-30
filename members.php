<?php
require_once 'core/init.php';
include 'includes/head.php';
 include 'includes/navigate.php';
 include 'helpers.php';

 ?>
<div class="container">
 <h1 class="text-center top">Registered Members</h1>
 <a href="register.php" class="btn btn-primary pull-right" id="add-product-btn">Register New Member</a><div class="clearfix"></div>
 <div class="clearfix"></div>
 <hr>
 </div>
 <?php
   $display ="SELECT * FROM members WHERE deleted =0";
   $disp=$db->query($display);
   $count = mysqli_num_rows($disp);

  ?>
 <h3 class="text-center count">Now Showing :<?=$count ?> members</h3>
 <br>
 <br>
 <table class="table table-bordered table-condensed table-striped">
     <thead><th>View</th><th>ID</th><th>Firstname</th><th>Lastname</th><th>Date Of Birth</th><th>Gender</th><th>Occupation</th><th>Telephone</th><th>House Number</th><th>Adrress</th><th>Church leader</th><th>Generational Group</th><th>Intrest Group</th><th>Communicant</th></thead>
     <tbody>
       <?php while($view =mysqli_fetch_assoc($disp)): ?>
         <tr>
           <td><a href="display.php?view=<?=$view['id']; ?>"class="btn btn-primary btn-sm">View</a></td>
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
 </table



 <?php include 'includes/footer.php'; ?>
