<?php
require_once 'core/init.php';
include 'includes/head.php';
 include 'includes/navigate.php';
 include 'helpers.php';

?>
<?php
  if (isset($_GET['view']) && !empty($_GET['view'])) {
    $show_id=(int)$_GET['view'];
    $show_id=sanitize($show_id);

   $show = "SELECT * FROM members WHERE id ='$show_id'";
   $showRes = $db->query($show);
   $showQ= mysqli_fetch_assoc($showRes);

}

 ?>

<h1 class="text-center top">Member Details</h1><hr>
 <div class="container display">
   <div class="row">
   <div class="col-md-12">
     <div class="col-md-4">
       <label><h3>Firstname*</h3></label><br>
       <h4  class="count1"><?=$showQ['firstname']; ?></h4>
     </div>

     <div class="col-md-4 col-md-ofset-4 ">
       <label><h3>Lastname*</h3></label><br>
       <h4  class="count1"><?=$showQ['lastname']; ?></h4>
     </div>
   </div>
 </div>
 <br>

<div class="row">

   <div class="col-md-12">
     <div class="col-md-3">
       <label><h3>Member ID*</h3></label><br>
       <h4  class="count1"><?=$showQ['id']; ?></h4>
     </div>

     <div class="col-md-3 col-md-ofset-3 ">
       <label><h3>Date of Birth*</h3></label><br>
       <h4  class="count1"><?=$showQ['bdate']; ?></h4>
     </div>

     <div class="col-md-3 ">
       <label><h3>Telephone*</h3></label><br>
       <h4  class="count1"><?=$showQ['telephone']; ?></h4>
     </div>

     <div class="col-md-3  ">
       <label><h3>Gender*</h3></label><br>
       <h4  class="count1"><?=$showQ['gender']; ?></h4>
     </div>
   </div>
 </div>
<br>

 <div class="row">

    <div class="col-md-12">
      <div class="col-md-3">
        <label><h3>Occupation*</h3></label><br>
        <h4  class="count1"><?=$showQ['occupation']; ?></h4>
      </div>

      <div class="col-md-3 col-md-ofset-3 ">
        <label><h3>House Number*</h3></label><br>
        <h4  class="count1"><?=$showQ['house']; ?></h4>
      </div>

      <div class="col-md-3 ">
        <label><h3>Address*</h3></label><br>
        <h4  class="count1"><?=$showQ['address']; ?></h4>
      </div>

      <div class="col-md-3  ">
        <label><h3>Church Leader*</h3></label><br>
        <h4 class="count1"><?=$showQ['bdate']; ?></h4>
      </div>
    </div>
  </div>
<br>
  <div class="row">
     <div class="col-md-12">
       <div class="col-md-3">
         <label><h3>Generational group*</h3></label><br>
         <h4 class="count1"><?=$showQ['gen_group']; ?></h4>
       </div>
       <div class="col-md-3 col-md-ofset-3 ">
         <label><h3>Intrest Group*</h3></label><br>
         <h4 class="count1"><?=$showQ['intrest_group']; ?></h4>
       </div>
       <div class="col-md-3 ">
         <label><h3>Communicant*</h3></label><br>
         <h4 class="count1"><?=$showQ['communicant']; ?></h4>
       </div>

     </div>
   </div>
<br>
<br><br>
   <a href="index.php" class="btn btn-primary  btn-md pull-right">>>Home</a>
 </div>
 <?php include 'includes/footer.php'; ?>
