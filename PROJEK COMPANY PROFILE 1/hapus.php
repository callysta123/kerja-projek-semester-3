<?php
include("config.php");
if( isset($_GET['email']) ){
    // ambil id dari query string
    $email = $_GET['email'];
    // buat query hapus
    $sql = "DELETE FROM db_contact WHERE email='$email'";
    $query = mysqli_query($db, $sql);
    // apakah query hapus berhasil?
    if( $query ){
    header('Location: list-feedback.php');
    } else {
    die("gagal menghapus...");
    }
   } else {
    die("akses dilarang...");
   }
   ?>