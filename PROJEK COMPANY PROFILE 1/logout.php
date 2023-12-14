<?php 
include 'config.php';
session_start();
// destroy the session
unset($_SESSION['pelanggan']);
header('Location: index.php');
?>