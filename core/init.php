<?php
$db=mysqli_connect('127.0.0.1','root','','church');
if (mysqli_connect_errno()) {
   echo "database connection failed with the following errors".mysqli_connect_error();
   die();
}
require_once $_SERVER['DOCUMENT_ROOT'].'/atom/complete/config.php';
//require_once BASEURL.'helpers/helpers.php';
