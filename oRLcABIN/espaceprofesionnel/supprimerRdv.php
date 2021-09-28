<?php
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$numrdv=$_GET['numrdv'];
$pdoStat = $db->prepare("DELETE FROM rendez_vous WHERE numrdv=:numrdv ");
$execut = $pdoStat->execute([':numrdv'=>$numrdv]);
if ($execut) {
	header('location: listeRDV.php');
}