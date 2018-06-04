<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Masuk</title>
  </head>
  <body>
    <form action="<?php echo base_url('index.php/login/login_action'); ?>" method="post">
      <label>Username</label><br>
      <input type="text" name="username" placeholder="Masukkan username anda"><br><br>
      <label>Password</label><br>
      <input type="password" name="password" placeholder="Masukkan password anda"><br><br>
      <input type="submit" name="submit" value="Login">
    </form>
  </body>
</html>
