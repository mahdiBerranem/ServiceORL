<?php
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$numdossier=$_GET['numdossier'];
$pdoStat = $db->prepare("DELETE FROM `dossier malade` WHERE numdossier=:numdossier ");
$execut = $pdoStat->execute([':numdossier'=>$numdossier]);
if ($execut) {
	header('location: listedosmed.php');
}