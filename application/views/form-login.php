<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | Admin</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>_template/bootstrap/css/bs.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>_template/eksternal/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>_template/eksternal/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>_template/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>_template/plugins/iCheck/square/blue.css">

</head>
<section class="login-block">
    <div class="container">
<div class="d-flex p-2 card bg-light rounded" style="margin: 50px 0 24px 0;">
<div class="container-fluid">
  <!-- <div class="container"> -->
  <a href="<?php echo base_url('login'); ?>"><h2 class="text-center"  style="color: #27ae60;">Login Petugas</h2></a>
  <div class="row">
    <!-- <div class="col" style="padding: 100px"> -->
      <form action="<?php echo base_url('login/ceklogin'); ?>" method="post">
        <div class="form-group">
        <label for="exampleInputEmail1" >Username</label><br>
        <input type="text" name="username"><br><br>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Password</label><br>
        <input type="password" name="password"><br><br>
        </div>
        <button type="submit" name="submit" class="btn btn-login float-right" style="background-color: #27ae60">Masuk</button>
        

        <!-- <input type="submit" name="submit" value="Login"> -->
      </form>
    <div class="col">
      <img src="<?php echo base_url() ?>gambar/amin.jpg" alt="Amin" style="">
    </div>
    </div>
</div>
    <!-- Toper Code -->
   <!--  <div class="col">
      <img src="<?php echo base_url() ?>gambar/amin.jpg" alt="Amin" style="">
    </div> -->
<!-- Toper Code -->

        <!-- <div class="col-md-8 banner-sec"> -->
      
    <!-- <div class="carousel-item active">
      <img style="height: 85%" class="d-block img-fluid" src="https://situsbudaya.id/wp-content/uploads/2017/10/masjid-jami-al-baitul-amien.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>AL Baitul Amin</h2>
            <p>AL Baitul Amin adalah sebuah yayasan pendidikan berbasis islam yang ada di daerah jember</p>
        </div>  
      </div> -->
    <!-- </div>
    </div>
  </div>
</div> -->
</div>
</section>

    <script src="<?php echo base_url(); ?>_template/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>_template/bootstrap/js/bootstrap.min.js"></script>
<!-- </body> -->
</html>
