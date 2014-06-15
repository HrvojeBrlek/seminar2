<?php 
session_start();
$currUrl=$_SESSION['url'];
session_destroy();
header('location:'.$currUrl);
?>