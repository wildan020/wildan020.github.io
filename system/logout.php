<?php
session_start(); // Start session nya
session_destroy(); // Hapus semua session
include "koneksi.php";
header("location: ".$base_url."index.html"); // Redirect ke halaman index.php
?>