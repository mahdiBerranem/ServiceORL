<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location:/oRLcABIN/page1.php");
?>