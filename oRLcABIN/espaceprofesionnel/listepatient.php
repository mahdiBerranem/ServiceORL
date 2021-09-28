<?php  session_start();

//connection a la bese 
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
//preparation requete
$adressepar=$_SESSION['nom'];
 
$requser = $db->prepare('SELECT * FROM `dossier malade` WHERE adressepar=:adressepar');
$requser->execute(['adressepar'=>$adressepar]);
//recuperation resultat une seul foi
$listdosmed = $requser->fetchall(PDO::FETCH_OBJ);
//var_dump($listpastient);
 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--important size ecran-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/oRLcABIN/menunev.css">
</head>
<body>
<div class="esp">
<div class="btn"  style="background-color:#F1AD10;float:right; margin:0 0 0 5px; width:180px;
   height:30px;
   right:10%;
   left:73%; cursor:pointer;  top:5px; position:absolute; border-radius:20px;">
  <a href="/oRLcABIN/InscrConnect/deconnexion.php" style="font-weight:bold;font-size:16px; color:black; ">Deconexion</a>
</div>
  <?php if ($_SESSION['id']==1) { ?>
<div class="btn"   style="background-color:#F1AD10;float:right; width:200px;
   height:30px;
   right:10%;
   left:58%; cursor:pointer; top:5px; position:absolute; border-radius:20px;">
  <a href="/oRLcABIN/espaceprofesionnel/Administration/admin.php" style="font-weight:bold;font-size:16px; color:black; ">Espace administration</a>
</div>
<?php } ?>
</div>

<div class="ab">   
 <header>
   <a href="listepatient.php" class="imgg" title="Service d'ORL(Oto-Rhino-Laryngologie) et de chirurgie cervico-faciale du CHU de Annaba"><img src="/oRLcABIN/ooo.png"></a>
    <h2 style="text-align:center ; text-shadow:0 2px 5px rgb(0,0,0,.5); padding-left:100px;"> Service d'ORL(Oto-Rhino-Laryngologie) et de</br>
   chirurgie cervico-faciale du CHU de Annaba</h2>
   <nav>    
         <ul>
           <li><a href="listepatient.php">Gestion des patientes</a>
               <ul> 
                   <li><a href="listepatient.php">Liste des patients </a></li>
                   <li><a href="dosmed.php">Nouveau patient</a></li>
               </ul>
           </li>
           <li><a href="listeRDV.php">Gestion des RDV</a>
               <ul> 
                   <li><a href="listeRDV.php">liste des RDV</a></li>
                   <li><a href="nvRDV.php">créer un RDV</a></li>                  
               </ul>
           </li>
           <li><a href="listedosmed.php">Gestion des Dossier Médicale</a>                       
           </li>
           <li><a href="archive.php">les archives</a></li>
           <li><a href="Gcours.php">Gestion des cours</a></li>
</br>
</br>
       </ul>
   </nav>
</header>
<div class="as">
 <div class="endroit"> 
<h4>patient</h4> 
<hr>
<ul>
<li><a href="listepatient.php">La liste des patient</a> </li>
<li><a href="dosmed.php">Nouveau patient</a></li>
</ul>
</div>
<div class="enghauche">
<h2>Liste patient</h2> 
<form method="post" action="dosmed.php"> 
<input type="submit" name="" value="Créer" class="btn btn-info" title="Ajouter patient"></form> 
<hr>
<form method="POST">
<table class="table ">
<tr> 
<td>Numero dossier </td>
<td>Nom patient </td> 
<td>Prenom patiet </td> 
<td>Action</td>
</tr>
 <?php foreach ($listdosmed as $dossiermedical):?> 
<tr>
<td ><?= $dossiermedical->numdossier ; ?></td>
<td><?= $dossiermedical->nompat;?></td> 
<td><?= $dossiermedical->prenompat; ?></td> 
<td> 
<a href="affichdosmed.php?numdossier=<?= $dossiermedical->numdossier ;?>&&nompat=<?= $dossiermedical->nompat; ?>" class=" btn btn-info" title="afficher dossier medical"> afficher</a>
<a href="nvrdvpourpet.php?numdossier=<?= $dossiermedical->numdossier ;?>&&nompat=<?= $dossiermedical->nompat; ?>&&prenompat=<?= $dossiermedical->prenompat; ?>" class=" btn btn-info" title="prendre un rendez vous">RDV</a>
</td> 
<?php endforeach ; ?> 
</tr>
</table>
</form>
</div>
</div>
</div>
<style type="text/css">
.endroit{
  margin-left:10px;
  margin-right: 15px;
  font-family: sans-serif;
  width:190px;

}
.endroit h4 {
  color:#ff9900;
  font-weight:bold;
  font-size:14px;
}
.endroit ul li a{ font-weight:bold;
                 font-size:13.5px;
                 color:#3A8DE1;
                 display: block;
                 cursor: pointer;
                 text-decoration:none; }
.endroit ul li:hover a{color:#ff9900; cursor:pointer; }
.endroit ul{list-style:none;
             margin:0;
             padding:0;
            text-align: left;}                 
.endroit ul li{
height: 40px; 
border-bottom:1px solid grey; 
}
.enghauche h2{color:#ff9900;}
/*.enghauche table{font-size: 19px;}
.enghauche strong{font-size: 19px;}*/
.as div{display:inline-table;}
.as {width: 1032px;}
.enghauche{
  height:100% 
  margin:0;
  width:75%;
}
.enghauche div{display:block;}
</style>
</body>
</html>