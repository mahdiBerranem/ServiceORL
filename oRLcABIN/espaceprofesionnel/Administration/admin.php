<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=serviseorl;charset=utf8', 'root', ''); 
if (isset($_SESSION['id']) AND $_SESSION['id'] ==1 ) {
if(isset($_GET['type']) AND $_GET['type'] == 'docteur') {
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $bdd->prepare('UPDATE docteur SET confirme = 1 WHERE doc_id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM docteur WHERE doc_id = ?');
      $req->execute(array($supprime));
   }
} elseif(isset($_GET['type']) AND $_GET['type'] == 'infirmiere') {
   if(isset($_GET['confirme']) AND !empty($_GET['confirme'])) {
      $confirme = (int) $_GET['confirme'];
      $req = $bdd->prepare('UPDATE infirmiere SET confirme = 1 WHERE inf_id = ?');
      $req->execute(array($confirme));
   }
   if(isset($_GET['supprime']) AND !empty($_GET['supprime'])) {
      $supprime = (int) $_GET['supprime'];
      $req = $bdd->prepare('DELETE FROM infirmiere WHERE inf_id = ?');
      $req->execute(array($supprime));
   }
}
$membres = $bdd->query('SELECT * FROM docteur ORDER BY doc_id DESC LIMIT 0,5 ');
$infirmiere = $bdd->query('SELECT * FROM infirmiere ORDER BY inf_id DESC LIMIT 0,5 ');
 

}else{echo "<style type='text/css'> body{background: url(../espaceprofesionnel/anon.png) repeat center top;} </style>"; exit();}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Administration</title>
   <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--important size ecran-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="/oRLcABIN/menunev.css">
</head>
<body>
<div style="margin:0 0 0 5px;left:93%;cursor:pointer;  top:5px; position:absolute;">
  <a href="/oRLcABIN/espaceprofesionnel/listeRDV.php"><img src="retour-fleche.jpg" style="border-radius:10px;" width="50px" height="50px" title="Retour a mon Profile"></a>
</div>
<table class="table ">
 <h2>La liste des docteur</h2>
<tr > 
<td >ID docteur</td>
<td >Nom docteur</td>
<td >prenom docteur</td>
<td>Action</td>
</tr>  
<tr> 
 <?php while($doc = $membres->fetch()) {  ?>
<td > 
<?= $doc['doc_id']; ?>  
</td>
<td> 
<?= $doc['nom']; ?>
</td>
<td> 
<?= $doc['prenom']; ?>
</td>
<td> 
<?php $conf=$doc['confirme']; 
if($conf == 0) { ?> - <a href="admin.php?type=docteur&confirme=<?= $doc['doc_id'] ?>"  class="btn btn-info" >Confirmer</a><?php } ?> - <a href="admin.php?type=docteur&supprime=<?= $doc['doc_id'] ?>"  class="btn btn-danger">Supprimer</a>
</td> 
</tr>
<?php } ?>
</table>
   <br /><br />
<table class="table ">
 <h2>La liste des infirmiere</h2>
<tr > 
<td >ID infirmiere</td>
<td >Nom infirmiere</td>
<td >infirmiere de docteur</td>
<td>Action</td>
</tr>  
<tr> 
 <?php while($inf = $infirmiere->fetch()) {  ?>
<td > 
<?= $inf['inf_id']; ?>  
</td>
<td> 
<?= $inf['nom']; ?>
</td>
<td> 
<?= $inf['doc_id']; ?>
</td>
<td> 
<?php $conf=$inf['confirme']; 
if($conf == 0) { ?> - <a href="admin.php?type=infirmiere&confirme=<?= $inf['inf_id'] ?>"  class="btn btn-info" >Confirmer</a><?php } ?> - <a href="admin.php?type=infirmiere&supprime=<?= $inf['inf_id'] ?>"  class="btn btn-danger">Supprimer</a>
</td> 
</tr>
<?php } ?>
</table>
 
</body>
</html>


