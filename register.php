
<?php require 'core/init.php'; ?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/navigate.php'; ?>
<?php include 'helpers.php'; ?>
<h1 class="text-center"><?=((isset($_GET['edit']))?'Edit ':'Register New') ?> Member</h1><hr>

<br>


<?php
  $gen ="SELECT * FROM cgroups Where parent ='2'";
  $genQ =$db->query($gen);

  $occu = "SELECT * FROM occupation";
  $occuQ=$db->query($occu);


  $intrest ="SELECT * FROM cgroups Where parent ='1'";
  $IntQ =$db->query($intrest);
 ?>
<?php
$edit_id=(int)isset($_GET['edit']);
$edit_id=sanitize($edit_id);
 $sql1="SELECT * FROM members WHERE id ='$edit_id'";
 $edit_result=$db->query($sql1);
$editQ = mysqli_fetch_assoc($edit_result);


  if (isset($_GET['edit']) && !empty($_GET['edit'])) {
  $fname = ((isset($_POST['firstname']) && $_POST['firstname'] != '')?sanitize($_POST['firstname']):'');
  $lname = ((isset($_POST['lastname']) && $_POST['lastname'] != '')?sanitize($_POST['lastname']):'');
  $gender = ((isset($_POST['gender']) && $_POST['gender'] != '')?sanitize($_POST['gender']):'');
  $occupation = ((isset($_POST['occupation']) && $_POST['occupation'] != '')?sanitize($_POST['occupation']):'');
  $bdate = ((isset($_POST['bdate']) && $_POST['bdate'] != '')?sanitize($_POST['bdate']):'');
  $phone = ((isset($_POST['phone']) && $_POST['phone'] != '')?sanitize($_POST['phone']):'');
  $house = ((isset($_POST['house']) && $_POST['house'] != '')?sanitize($_POST['house']):'');
  $address = ((isset($_POST['address']) && $_POST['address'] != '')?sanitize($_POST['address']):'');
  $c_leader = ((isset($_POST['leader']) && $_POST['leader'] != '')?sanitize($_POST['leader']):'');
  $mgroup = ((isset($_POST['mgroup']) && $_POST['mgroup'] != '')?sanitize($_POST['mgroup']):'');
  $sgroup = ((isset($_POST['sgroup']) && $_POST['sgroup'] != '')?sanitize($_POST['sgroup']):'');
  $communicant = ((isset($_POST['communicant']) && $_POST['communicant'] != '')?sanitize($_POST['communicant']):'');


    if (isset($_GET['edit'])){
  $edit_id=(int)$_GET['edit'];
  $edit_id=sanitize($edit_id);
   $sql1="SELECT * FROM members WHERE id ='$edit_id'";
   $edit_result=$db->query($sql1);
  $editQ = mysqli_fetch_assoc($edit_result);

}
 $fname = ((isset($_POST['firstname']) && $_POST['firstname'] !== '')?sanitize($_POST['firstname']):$editQ['firstname']);
$lname = ((isset($_POST['lastname']) && $_POST['lastname'] !== '')?sanitize($_POST['lastname']):$editQ['lastname']);
$gender = ((isset($_POST['gender']) && $_POST['gender'] !== '')?sanitize($_POST['gender']):$editQ['gender']);
$occupation = ((isset($_POST['occupation']) && $_POST['occupation'] !== '')?sanitize($_POST['occupation']):$editQ['occupation']);
 $bdate = ((isset($_POST['bdate']) && $_POST['bdate'] !== '')?sanitize($_POST['bdate']):$editQ['bdate']);
   $house = ((isset($_POST['house']) && $_POST['house'] !== '')?sanitize($_POST['house']):$editQ['house']);
    $address = ((isset($_POST['address']) && $_POST['address'] !== '')?sanitize($_POST['address']):$editQ['address']);
        $phone = ((isset($_POST['phone']) && $_POST['phone'] !== '')?sanitize($_POST['phone']):$editQ['telephone']);


}

 if(isset($_GET['edit'])){
      $insertSql = "UPDATE  members set firstname = '$fname',lastname ='$lname' WHERE id='$edit_id'";
      $db->query($insertSql);

 }
 $fname = ((isset($_POST['firstname']) && $_POST['firstname'] !== '')?sanitize($_POST['firstname']):$editQ['firstname']);
$lname = ((isset($_POST['lastname']) && $_POST['lastname'] !== '')?sanitize($_POST['lastname']):$editQ['lastname']);
$gender = ((isset($_POST['gender']) && $_POST['gender'] !== '')?sanitize($_POST['gender']):$editQ['gender']);
$occupation = ((isset($_POST['occupation']) && $_POST['occupation'] !== '')?sanitize($_POST['occupation']):$editQ['occupation']);
 $bdate = ((isset($_POST['bdate']) && $_POST['bdate'] !== '')?sanitize($_POST['bdate']):$editQ['bdate']);
   $house = ((isset($_POST['house']) && $_POST['house'] !== '')?sanitize($_POST['house']):$editQ['house']);
    $address = ((isset($_POST['address']) && $_POST['address'] !== '')?sanitize($_POST['address']):$editQ['address']);
        $phone = ((isset($_POST['phone']) && $_POST['phone'] !== '')?sanitize($_POST['phone']):$editQ['telephone']);



 ?>

<form class="" action="verify.php" method="post">
  <div class="container-fluid">
    <div class="row">
      <h2 class="description"><b>Personal Details</b></h2>
      <div class="col-md-4 col-md-offset-2">
        <label for=""><h4>Firstname</h4></label>
        <input type="text" class="form-control" name="firstname" value="<?=$fname ?>" placeholder="firstname">
      </div>
      <div class="col-md-4 col-md-offset-1">
        <label for=""><h4>Lastname</h4></label>
        <input type="text" name="lastname" class="form-control" value="<?=$lname ?>" placeholder="lastname">
      </div>
    </div>
      <div class="row">
      <div class="col-md-4 col-md-offset-2">
        <label for=""><h4>Date Of Birth</h4></label>
        <input type="date" name="bdate" class="form-control" value="<?=$bdate ?>">
      </div>
      <div class="col-md-4 col-md-offset-1">
        <label for=""><h4>Gender</h4></label>
        <select class="form-control" name="gender" value="<?=$gender ?>">
          <option value="male"></option>
          <option value="male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-2">
          <label for=""><h4>Occupation</h4></label>
          <select class="form-control" name="occupation">
            <option value=""<?=(($occupation == '')?' selected':''); ?>></option>
            <?php  while($occupa = mysqli_fetch_assoc($occuQ)): ?>
            <!-- <option value="<?=$occupa['id']?>"<?=((isset($_POST['occupation']) && $_POST['occupation'] == $occupa['id'])?' selected':'') ?>><?=$occupa['occupation']?>></option> -->
              <option value="<?=$occupa['occupation']?>"<?=(($occupation == $occupa['id'])?' selected':'');?>><?=$occupa['occupation']?></option>
          <?php  endwhile; ?>
          </select>
        </div>
        <div class="col-md-4 col-md-offset-1">
          <label for=""><h4>Telephone</h4></label>
          <input type="text" name="phone" class="form-control" value="<?=$phone ?>" placeholder="0XXXXXXXXX">
        </div>
      </div>
          <div class="row">
          <div class="col-md-4 col-md-offset-2">
          <label for=""><h4>House Number</h4></label>
          <input type="text" name="house" class="form-control" value="<?=$house ?>" placeholder="TE XXX">
        </div>
        <div class="col-md-4 col-md-offset-1">
            <label for=""><h4>Address</h4></label>
          <textarea name="address" rows="8" cols="10" class="form-control"><?=$address ?></textarea>
        </div>
      </div>
<hr>
<!-- other details -->
<?php

?>
    <div class="row">
      <h2 class="description"><b>Other Details</b></h2>
      <div class="col-md-4 col-md-offset-2">
        <label for=""><h4>1. Are you a Church Leader ?</h4></label><br>
        <select class="form-control" name="leader">

          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>

      <div class="col-md-4 col-md-offset-1">
        <label for=""><h4>2. Which Generational Group do You belong ?</h4></label>
        <select class="form-control" name="mgroup">
          <?php while($gene =mysqli_fetch_assoc($genQ)): ?>
          <option value="<?= $gene['all_groups'] ?>"><?= $gene['all_groups'] ?></option>
              <?php endwhile; ?>
          </select>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-2">
      <label for=""><h4>3. Which Intrest Group do You belong ?</h4></label>
      <select class="form-control" name="sgroup">
        <?php while($intre =mysqli_fetch_assoc($IntQ)): ?>
        <option value="<?= $intre['all_groups'] ?>"><?= $intre['all_groups'] ?></option>
            <?php endwhile; ?>

      </select>
    </div>
    <div class="col-md-4 col-md-offset-1">
      <label for=""><h4>4. Are You A Communicant? </h4></label>
      <select class="form-control" name="communicant">
        <option value="yes">Yes</option>
        <option value="no">No</option>
      </select>
    </div>
  </div>
    <br><br>
    <div class="row">
      <input type="submit" name="submit"  class="btn btn-primary btn-md col-md-offset-5  complete" value="<?=((isset($_GET['edit']))?'Edit ':'Register ') ?>member">
      <a href="index.php" class="btn btn-warning btn-md">Cancel</a>
    </div>
  </div>
</form


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jQuery.js"></script>


<?php include 'includes/footer.php'; ?>
