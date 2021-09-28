<?php session_start();
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$numdossier=$_GET['numdossier'];
$pdoStat = $db->prepare("SELECT * FROM `dossier malade` WHERE numdossier=:numdossier ");
$execut = $pdoStat->execute([':numdossier'=>$numdossier]);
$listdosmed = $pdoStat->fetch(PDO::FETCH_OBJ); 
?>
<!DOCTYPE html>
<html lang="en"> 
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
<h4>Dossier Médicale</h4> 
<hr>
<ul>
<li><a href="listedosmed.php">La liste des dossier medecale</a> </li>
<li><a href="dosmed.php">Nouveau dossier medecal</a></li>
</ul>
</div>

<div class="enghauche">
<h2>Dossier Médicale de <?= $listdosmed->nompat ;  ?></h2> 
<hr><br>
<div class="frm">
<div style="padding-left:30%;"> 
<img src="uploads/PhotoMalade/<?php echo($listdosmed->nompat); ?>" width="200" height="200" style="border-radius:10px;">
</div>
<br>
<label>Service DU professeur:</label><strong><?= $listdosmed->serviceDUprofesseur; ?></strong><br>
<div class="deux">
<div class="deux1"> 
<label>Nom :</label><strong><?= $listdosmed->nompat ; ?></strong><br>
<label>Prenom :</label> <strong><?= $listdosmed->prenompat;?></strong><br>
<label>Profession :</label><strong><?= $listdosmed->profession;?></strong><br>
<label>Date de Naissance :</label><strong><?= $listdosmed->dateNaissPat;?></strong><br>
<label>Lieu de Naissance :</label><strong><?= $listdosmed->lieuDeNaiss; ?></strong><br>
<label>Domicile :</label><strong><?= $listdosmed->domicile;?></strong><br>
</div>
<div class="deux2"> 
<label>Sale :</label><strong><?= $listdosmed->salle;?></strong><br>
<label>N-lit :</label><strong><?= $listdosmed->Lit; ?></strong><br>
<label>Entré le :</label><strong><?= $listdosmed->Entre; ?></strong><br>
<label>Sortie le:</label><strong><?= $listdosmed->Sortie; ?></strong><br>
<label>N-Matricule :</label><strong><?= $listdosmed->numPatient; ?></strong><br>
<label>Sexe :</label><strong><?= $listdosmed->sexe; ?></strong><br>
</div>
</div>
<div><label>Adresse par : </label><strong><?= $listdosmed->adressepar; ?></strong></div>
<div class="processus">
<label>Processus :</label><br><strong><?= $listdosmed->processus;?></strong> <br>

</div>

<div class="trait">
<label>TRATEMENT SUBIS :</label><br><strong><?= $listdosmed->traitementSubis; ?></strong><br>
</div>
<hr>
<div class="num">
<label>Numéro téléphone:</label><strong><?= $listdosmed->telPAT; ?></strong><br>
</div>
<div> 
<?php include'parcourimageries.php' ?>
</div>
</div>
</div>
</div>

</div>
<!-- css -->
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
/*.enghauche li{list-style:none;
              text-decoration:underline;
               color:#A27CDB;}*/
.enghauche strong{font-size:16px;
                  color:rgba(0, 0, 0, 0.6);
                  line-height:30px;}
.as div{display:inline-table;}
.as {width: 1032px;}
.enghauche{
  height:100% 
  margin:0;
  width:75%;
}
.enghauche div{display:block;}
.deux{width:100%;
      min-height:300px;}
.deux1{width: 50%;  height:300px;}
.deux2{width: 49.5%;  height:300px;}
.deux div{display:inline-table;}
.enghauche div label{ font-weight:bold;
  font-size:18px;
  color:rgba(0, 0, 0, 0.8);
  line-height:40px;
}
.processus{
  width:100%;
  min-height:80px;
}
.trait{
  width:100%;
  min-height:80px;
}
.num{
  width:100%;
  min-height:30px;
}
.frm{
margin: 0 auto;
padding:10px;
 /*background-color:rgba(23, 162, 184, .05)rgba(243, 110, 11, 0.9)*/;
left:20%;
border: 1px solid grey;
border-radius: 5px ;
}
.input-frm{
display: flex;
flex-direction:column;
}
::-webkit-input-placeholder{
  font-weight:bold;
  color:rgba(0, 0, 0, 0.7);
}
.frm input[type="submit"]
{ cursor: pointer;
  border: none;
  outline: none; 
  height: 35px; 
  width: 100%;
  background:#469CCA ;
  color: #fff ; 
  font-size: 16px ;
  border-radius: 10px;
}
</style>

</body>
</html> 
<!--  -->

<!-- <?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-important size ecran->
<link rel="stylesheet" type="text/css" href="/oRLcABIN/menunev.css">
</head>
<body>
<div class="esp">
 <form action="/oRLcABIN/page1.php">
 <input type="submit" value="déconnecté" style="float: right; background:#F1AD10; height: 30px; width: 200px;
 border-radius:20px; font-weight:bold;font-size:16px; cursor: pointer;"></form>
</div>

<div class="ab">   
 <header>
  <a href="listepatient.php" class="imgg"><img src="/oRLcABIN/ooo.png"></a>
    <h2 style="padding-left: 20px;">Service d'ORL (Oto-Rhino-Laryngologie) et de </br>
    chirurgie cervico-faciale du CHU de Annaba</h2>
   <nav>    
         <ul>
           <li><a href="listepatient.php">Gestion des patientes</a>
               <ul> 
                   <li><a href="listepatient.php">Liste des patients </a></li>
                   <li><a href="creernvpat.php">Nouveau patient</a></li>
               </ul>
           </li>
           <li><a href="listeRDV.php">Gestion des RDV</a>
               <ul> 
                   <li><a href="listeRDV.php">liste des RDV</a></li>
                   <li><a href="nvRDV.php">créer un RDV</a></li>                  
               </ul>
           </li>
           <li><a href="dosmed.php">Gestion des Dossier Médicale</a>                       
           </li>
           <li><a href="archive.php">les archives</a></li>
</br>
</br>
       </ul>
   </nav>
</header>
<div class="as">
 <div class="endroit"> 
<h4>Dossier Médicale</h4> 
<hr>
<ul>
<li><a href="listedosmed.php">La liste des dossier medecale</a> </li>
<li><a href="dosmed.php">Nouveau dossier medecal</a></li>
</ul>
</div>

<div class="enghauche">
<h2>Nouveau Dossier Médicale</h2> 
<br><br><hr><br><br>
<?php/* if (($_SESSION['nompat'])=='cd'){*/?>
<div class="frm">
<label>service DU professeur:</label><?php echo' '.$_SESSION['serviceDUprofesseur'];  ?><br>
<div class="deux">
<div class="deux1"> 
<label>nom :</label><?php echo ' '.$_SESSION['nompat'];  ?><br>
<label>prenom :</label> <?php echo ' '.$_SESSION['prenompat'] ;?><br>
<label>Profession :</label><?php echo ' '.$_SESSION['profession'] ;?><br>
<label>Date de Naissance :</label><?php echo ' '.$_SESSION['dateNaissPat'];?><br>
<label>lieu de Naissance :</label><?php echo ' '.$_SESSION['lieuDeNaiss']; ?><br>
<label>Domicile :</label><?php echo ' '.$_SESSION['domicile'] ;?><br>
</div>
<div class="deux2"> 
<label>Sale :</label><?php echo' '.$_SESSION['salle'];?><br>
<label>N-lit :</label><?php echo ' '.$_SESSION['Lit']; ?><br>
<label>Entré le :</label><?php echo ' '.$_SESSION['Etre']; ?><br>
<label>Sortie le:</label><?php echo ' '.$_SESSION['Sorti']; ?><br>
<label>N-Matricule :</label><?php echo ' '.$_SESSION['numPatient']; ?><br>
<label>Sexe :</label><?php echo ' '.$_SESSION['sexe']; ?><br>
</div>
</div>

<div class="processus">
<label>processus :</label><?php echo ' '.$_SESSION['processus'];?> <br>

</div>

<div class="trait">
<label>TRATEMENT SUBIS :</label><?php echo ' '.$_SESSION['traitementSubis']; ?><br>
</div>
<hr>
<div class="num">
<label>numéro téléphone:</label><?php echo ' '.$_SESSION['telPAT'] ; ?><br>
</div>
<input type="submit" name="modifier" value="modifier" />
<input type="reset" name="" value="suprimé" />
</div>
</div>
</div>

</div> 
   -->