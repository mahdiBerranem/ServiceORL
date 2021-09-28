
<?php
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$numrdv=$_GET['id'];
$pdoStat = $db->prepare("DELETE FROM cours WHERE cour_id=:id ");
$execut = $pdoStat->execute([':id'=>$numrdv]);
if ($execut) {
	header('location: listcours.php');
}