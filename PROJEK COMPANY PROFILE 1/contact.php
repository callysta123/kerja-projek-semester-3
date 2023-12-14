<?php 
include("config.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $tanggal = $_POST['tanggal'];

    $sql  = "INSERT INTO db_contact(name, email, message, tanggal) VALUES ('$name', '$email', '$message', CURDATE())";
    $query = mysqli_query($db, $sql);

    if ($query) { 
        header('Location: index.php?status=sukses');} 
        else {
        header('Location: index.php?status=gagal');
    }
}
 else {
    die(mysqli_error($db));  
}

?>