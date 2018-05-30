<?php

require_once 'core/init.php';
include 'includes/head.php';
 include 'includes/navigate.php';


 ?>
<div class="container col-md-12">
  <div class="col-md-4">
   <img src="images/Presby2.png" class="img-responsive  header_image" alt="">
  </div>
  <div class="col-md-8">
    <h1 class="text-left top"><strong>Mountzion Congregation</strong><br><small>mid-tafo local</small></h1>
</div>
</div>
<br>
<hr>
<br><br>
<div class="container cont">
  <div class="container cont1">
    <div class="row">
      <div class="col-sm-6 ">
         <h4 class="text-center sHead"><b>Member Registration</b></h4>
         <a href="register.php" class="btn btn-primary btn-block btn-lg" data-toggle="tooltip" data-placement="top" title="Register new  member">Regsiter New Member</a>
      </div>
      <div class="col-sm-6">
         <h4 class="text-center sHead"><b>Update Memeber </b></h4>
         <a href="view.php" class="btn btn-success btn-block btn-lg" data-toggle="tooltip" data-placement="top" title="Update member info">Update Member Info</a>
      </div>
    </div>
  </div>
<br><br>
  <div class="container-fluid cont2">
    <div class="row">
      <div class="col-sm-3 bg-primary ">
          <h4 class="text-center sHead"><b>Search All Memebers</b></h4>
          <p class="text-center">
            lorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit
          </p>
          <form class="form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>

      <p></p>
          <a href="#" class="btn btn-warning btn-block btn-lg" data-toggle="tooltip" data-placement="top" title="Search for member">Search  member</a>
      </div>

      <div class="col-sm-3 ">
          <h4 class="text-center sHead"><b>Church Leaders </b></h4>
          <p class="text-center">
            lorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit
          </p>
          <form class="form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
          <p></p>
          <a href="#" class="btn btn-primary btn-block btn-lg" data-toggle="tooltip" data-placement="top" title="Search church leader">Search Church Leader</a>
        </div>

      <div class="col-sm-3 ">
          <h4 class="text-center sHead"><b>Deleted members </b></h4>
      <p class="text-center">
        lorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit
      </p>
      <form class="form">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
    </form>
      <a href="#" class="btn btn-danger btn-block btn-lg" data-toggle="tooltip" data-placement="top" title="search deleted member">Search Deleted Member</a>
    </div>
      <div class="col-sm-3 ">
          <h4 class="text-center sHead"><b>Communicants</b></h4>
          <p class="text-center">
            lorem ipsum dolor sit lorem ipsum dolor sitlorem ipsum dolor sitlorem ipsum dolor sit
          </p>
          <form class="form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>

        <a href="#" class="btn btn-warning btn-block btn-lg">Search Communicant</a>
          <!-- <a href="#" class=""><button type="button" name="button" class="btn btn-primary btn-lg col-md-6">register</button></a> -->
      </div>
    </div>

</div>
<?php include 'includes/footer.php'; ?>
