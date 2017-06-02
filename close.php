<?php
session_start();
session_destroy();
echo "<script>window.open('main.php','_self')</script>";
?>