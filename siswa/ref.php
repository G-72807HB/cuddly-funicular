<?php
session_start();
unset($_SESSION['gbr']);
header("refresh:0; url=../siswa/index.php");
?>