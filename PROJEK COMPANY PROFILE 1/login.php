<?php 
include 'config.php';
session_start();
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login</div>
      </div>
      <div class="form-container">
        <div class="form-inner">
          <form action="list-feedback.php" class="login">
            <pre>
            </pre>
            <div class="field">
              <input type="text" placeholder="Masukan Email " required name="user">
            </div>
            <div class="field">
              <input type="password" placeholder="Masukan Password" required name="pass">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login" name="login">
            </div>
        </div>
      </div>
    </div>
  <script  src="./script.js"></script>
  
  <?php 
          if (isset($_POST['login'])) 
          {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
        
            //lakukan pemvalidan
            $ambil = $koneksi->query("SELECT * FROM login WHERE user='$user'
            AND pass='$pass'");
            
            $yangcocok =$ambil->num_rows;

            if ($yangcocok==1) 
            {  
               $akun = $ambil->fetch_assoc();
               $_SESSION["pelanggan"] = $akun;
               echo "<script>alert('Login Berhasil Selamat Datang User')</script>";
                echo "<script>location='list-feedback.php';</script>";
            }
            else {
                echo "<script>alert('email Atau Password Salah Coba Lagi')</script>";
                echo "<script>location='login.php';</script>";
            }
          }
          ?>
</body>
</html>