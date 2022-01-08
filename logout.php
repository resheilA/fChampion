<?php
ob_start();
include("connect.php");
include("header.php");

session_destroy();
header("location:listcourse.php?sport=cricket");
?>