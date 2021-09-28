<?php  
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', ''); 
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_SESSION['id']) AND $_SESSION['id']) {
   $getid =$_SESSION['id'];
/*if (isset($_POST['search_text'])) {*/
  if (!empty($_POST['search'])) {
  $search=$_POST['search'];
 $sql="SELECT * FROM rendez_vous
  WHERE (numrdv LIKE '%".$search."%'
  OR nompat LIKE '%".$search."%' 
  OR prenompat LIKE '%".$search."%' 
  OR daterdv LIKE '%".$search."%' )
  and (doc_id_fk = ?) ";
  }
  
  else{
    $sql="SELECT * FROM rendez_vous WHERE doc_id_fk = ? ORDER BY daterdv DESC";
  }
  $requser= $bdd->prepare($sql);
    $requser->execute(array($getid));
    $listrdv= $requser->fetchall(PDO::FETCH_OBJ);
 }else{echo "<style type='text/css'> body{background: url(../espaceprofesionnel/anon.png) repeat center top;} </style>"; exit();}
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
</div>

<div class="ab">   
 <header>
 <a href="#" class="imgg" title="Service d'ORL(Oto-Rhino-Laryngologie) et de chirurgie cervico-faciale du CHU de Annaba"><img src="/oRLcABIN/ooo.png"></a>
    <h2 style="text-align:center ; text-shadow:0 2px 5px rgb(0,0,0,.5); padding-left:100px;"> Service d'ORL(Oto-Rhino-Laryngologie) et de</br>
   chirurgie cervico-faciale du CHU de Annaba</h2>
</header>
<div class="as">
 <div class="endroit"> 
<h4>Rendez-vous</h4> 
<hr>
<ul>
<li><a href="listeRDV.php">La liste des RDV</a></li>
<li><a href="nvRDV.php">prendre RDV</a></li>
</ul>
</div>

<div class="enghauche">
<h2>La liste des Rendez-vous</h2>
 <br>
<form method="post" action="nvRDV.php"> 
<input type="submit" name="" value="Créer" class="btn btn-info" title="Ajouter rendez=vous"></form>
<br><br>

<form  method="post">
   <input class="form-control form-control-sm mr-3 w-75" type="text" name="search" placeholder="Rechercher par les détails de rendez-vous...">
</form>

<br><hr><br>
<table class="table ">
<tr > 
<td >Numéro de RDV</td>
<td >Nom patient</td>
<td>Prénom patient</td>
<td>date de RDV</td>
<td>Médecin Traitant</td>
<td>Action</td>
</tr>  
<tr> 
  <?php foreach ($listrdv as $rdv): ?>
<td > 
<?= $rdv->numrdv ?> 
</td>
<td> 
<?= $rdv->nompat ?>
</td>
<td> 
<?= $rdv->prenompat ?>
</td>
<td> 
<?= $rdv->daterdv ?>
</td>
<td> 
<?= $rdv->doc_id_fk ?>
</td>
<td> 
<a href="modifierRdv.php?numrdv=<?= $rdv->numrdv ;?>" class="btn btn-info"> modifier</a>
<a onclick="return confirm('vous-êtes sûr de vouloir supprimer cette entrée ?')" href="supprimerRdv.php?numrdv=<?= $rdv->numrdv ;?>" class="btn btn-danger"> supprimer</a>
</td> 
</tr>
<?php endforeach ; ?>
</table>

</div>
</div>

</div>
<!-- css -->
<style type="text/css">
.endroit{
  margin-left:10px;
  margin-right:5px;
  font-family: sans-serif;
  width:/*190px*/auto;
 
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

.as div{display:inline-table;}
.as {width: 1032px;}

</style>

</body>
</html> 