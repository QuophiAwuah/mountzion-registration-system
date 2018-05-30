<?php require 'core/init.php';
      require 'helpers/helpers.php';

 ?>


<?php
$errors = array();

if(isset($_POST['submit'])){

  $fname = sanitize($_POST['firstname']);
  $lname =sanitize($_POST['lastname']);
  $bdate =sanitize($_POST['bdate']);
  $occupation =sanitize($_POST['occupation']);
  $phone =sanitize($_POST['phone']);
  $gender =sanitize($_POST['gender']);
  $house =sanitize($_POST['house']);
  $mgroup =sanitize($_POST['mgroup']);
  $sgroup =sanitize($_POST['sgroup']);
  $communicant =sanitize($_POST['communicant']);
  $leader =sanitize($_POST['leader']);
  $address=sanitize($_POST['address']);

  if(empty($_POST['firstname'])){
    $errors[]='firstname is empty';
    // echo  display_errors($errors);

  }

  if(empty($_POST['lastname'])){
    $errors[]='lastname name is empty';
    // echo  display_errors($errors);

    // header('Location: register.php');
  }

  if(empty($_POST['bdate'])){
    $errors[]='date of birth is empty';
    // echo  display_errors($errors);
    // header('Location: register.php');
  }

  if(empty($_POST['phone'])){
    $errors[]='Telephone name is empty';
    // echo  display_errors($errors);
    // header('Location: register.php');
  }
  // if(!preg_match('/^\(?\+([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9])$/',trim($phone)){
  //   $errors[]='Telephone name is empty';
  // // }
  // $count =preg_replace('/[() .+-]/' ,'',$phone);
  // if(count($count) !=10 ){
  //   $errors[]='telephone must be 10 digits';
  // }

  if(empty($_POST['house'])){
    $errors[] .='House number name is empty';
    // echo  display_errors($errors);
    // header('Location: register.php');
  }

  if(empty($_POST['address'])){
    $errors[]='address name is empty';
    // echo  display_errors($errors);
    // header('Location: register.php');
  }

  if(!empty($errors)){
      echo display_errors($errors);
    }
    else{

      $ins ="INSERT INTO `members`(`firstname`,`lastname`,`bdate`,`gender`,`occupation`,`telephone`,`house`,`address`,`church_leader`,`gen_group`,`intrest_group`,`communicant`)
      VALUES('$fname','$lname','$bdate','$gender','$occupation','$phone','$house','$address','$leader','$mgroup','$sgroup','$communicant')";

      $db->query($ins);
      header('Location: index.php');
    }

}
?>
<?php

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

if(isset($_POST['submit'])){

  $fname = sanitize($_POST['firstname']);
  $lname =sanitize($_POST['lastname']);
  $bdate =sanitize($_POST['bdate']);
  $occupation =sanitize($_POST['occupation']);
  $phone =sanitize($_POST['phone']);
  $gender =sanitize($_POST['gender']);
  $house =sanitize($_POST['house']);
  $mgroup =sanitize($_POST['mgroup']);
  $sgroup =sanitize($_POST['sgroup']);
  $communicant =sanitize($_POST['communicant']);
  $leader =sanitize($_POST['leader']);
  $address=sanitize($_POST['address']);

  if(empty($_POST['firstname'])){
    $errors[]='firstname is empty';

  }

  if(empty($_POST['lastname'])){
    $errors[]='lastname name is empty';
  }

  if(empty($_POST['bdate'])){
    $errors[]='date of birth is empty';
  }

  if(empty($_POST['phone'])){
    $errors[]='Telephone name is empty';

  }
  // if(!preg_match('/^\(?\+([0-9]{1,4})\)?[-\. ]?(\d{3})[-\. ]?([0-9])$/',trim($phone)){
  //   $errors[]='Telephone name is empty';
  // // }
  // $count =preg_replace('/[() .+-]/' ,'',$phone);
  // if(count($count) !=10 ){
  //   $errors[]='telephone must be 10 digits';
  // }

  if(empty($_POST['house'])){
    $errors[] .='House number name is empty';
  }

  if(empty($_POST['address'])){
    $errors[]='address name is empty';
      }

  if(!empty($errors)){
      echo display_errors($errors);
    }
    else{

    $up = " UPDATE members set firstname='$fname' lastname='$lastname',bdate='$bdate',occupation='$occupation',telephone='$phone',gender='$gender',house='$house',gen_group='$mgroup',intrest_group='$sgroup',communicant='$communicant',church_leader='$leader',address='$address'  WHERE id='$edit_id'";
    $upQ=$db->query($up);
    header('Location: members.php');
        }


}
}
}

?>
