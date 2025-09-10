<?php 

require 'index.php';
session_destroy();
header("location:login.php?message=you have logged out successfully");
exit();


?>