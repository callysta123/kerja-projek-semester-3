<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
    // ambil data dari formulir
    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    // buat query update
    $sql = "UPDATE db_contact SET name= '$name', message= '$message' WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    // apakah query update berhasil?
    if( $query ) {
    // kalau berhasil alihkan ke halaman list-siswa.php
    header('Location: list-feedback.php');
    } else {
    // kalau gagal tampilkan pesan
    die("Gagal menyimpan perubahan...");
    }
   } else {
    die("Akses dilarang...");
   }
   ?>