<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="d-flex p-2 card bg-light rounded" style="margin: 50px 0 24px 0;">
<div class="container-fluid">
  <h1 style="text-align: center;">Login</h1>
  <div class="row">
    <div class="col" style="padding: 100px">
      <form action="<?php echo base_url('login/ceklogin'); ?>" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
      </form>
    </div>
    <div class="col">
      <img src="<?php echo base_url() ?>gambar/amin.jpg" alt="Amin" style="">
    </div>
  </div>
</div>
</div>

</body>
</html>
