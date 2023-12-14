<?php
// include('navbar.php');
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['email']) ) {
    header('Location: list-feedback.php');
   } else {

   //ambil id dari query string
   $email = $_GET['email'];
   // buat query untuk ambil data dari database
   $query = mysqli_query($db, "SELECT * FROM db_contact WHERE email = '$email'");
   $feedback = mysqli_fetch_assoc($query);
   // jika data yang di-edit tidak ditemukan
   if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
   }
  }
   ?>
   <!DOCTYPE html>
   <html>
   <head>
    <title>Formulir Edit</title>
   </head>
   <body>
    <header>
    <h3>Formulir Edit </h3>
    </header>
    <form action="proses-edit.php" method="POST">
    <fieldset>
    <input type="hidden" name="email" value="<?php echo $feedback['email'] ?>" />
    <p>
    <label for="name">name: </label>
    <input type="text" name="name" placeholder="" value="<?php echo $feedback['name'] ?>" />
    </p>
    <p>
    <label for="">message: </label>
    <input type="text" name="message" placeholder="" value="<?php echo $feedback['message'] ?>" />
    </p>
   <p>
   <input type="submit" value="Simpan" name="simpan" />
   </p>
 </fieldset>
 </form>
 </body>
</html>