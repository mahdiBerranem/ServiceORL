<?php session_start();
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
#$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['ajout'])) {
$nompat=($_POST['nom']);
$prenompat=($_POST['prenom']);
$profession=($_POST['Profession']);
$dateNaissPat=($_POST['dateNaisspat']);
$lieuDeNaiss=($_POST['lieuDeNaiss']);
$domicile=($_POST['Domicile']);
$salle=($_POST['salle']);
$Lit=($_POST['lit']);
$Entre=($_POST['Entre']);
$Sortie=($_POST['Sortie']);
$numPatient=($_POST['numPatient']);
$sexe=($_POST['sexe']);
$telPAT=($_POST['telPAT']);
$processus=($_POST['processus']);
$adressepar=($_POST['adressepar']);
$traitementSubis=($_POST['traitementSubis']);
$serviceDUprofesseur=($_POST['serviceDUprofesseur']);
$execution=$db->prepare("INSERT INTO `dossier malade`( `nompat`, `prenompat`, `profession`, `dateNaissPat`, `lieuDeNaiss`, `domicile`, `salle`, `Lit`, `Entre`, `Sortie`, `numPatient`, `sexe`, `telPAT`, `processus`, `adressepar`, `traitementSubis`, `serviceDUprofesseur`,`images`) VALUES (:nompat, :prenompat,:profession, :dateNaissPat,:lieuDeNaiss,:domicile,:salle,:Lit,:Entre,:Sortie,:numPatient,:sexe,:telPAT,:processus,:adressepar,:traitementSubis,:serviceDUprofesseur,' ')");
$insertok=$execution->execute(['nompat'=>$nompat, 
'prenompat'=>$prenompat,
'profession'=>$profession,
'dateNaissPat'=>$dateNaissPat,
'lieuDeNaiss'=>$lieuDeNaiss,
'domicile'=>$domicile,
'salle'=>$salle,
'Lit'=>$Lit,
'Entre'=>$Entre,
'Sortie'=>$Sortie,
'numPatient'=>$numPatient,
'sexe'=>$sexe,
'telPAT'=>$telPAT,
'processus'=>$processus,
'adressepar'=>$adressepar,
'traitementSubis'=>$traitementSubis,
'serviceDUprofesseur'=>$serviceDUprofesseur]);

$_SESSION['nompatient']=$_POST['nom'];
$n=$_SESSION['nompatient'];
if(isset($_FILES['img']) AND !empty($_FILES['img']['name'])){
$extensionvalides=array('jpg','jpeg','png');
$extensionupload=strtolower(substr(strrchr($_FILES['img']['name'], '.'), 1));
  if (in_array($extensionupload,$extensionvalides)) {
    $chemin="uploads/PhotoMalade/".$_SESSION['nompatient'].".".$extensionupload;
     $resultat=move_uploaded_file($_FILES['img']['tmp_name'] , $chemin);
     $nom=$n.".".$extensionupload;
     if ($resultat) {
       $insertimg=$db->prepare("UPDATE `dossier malade` SET `images`= ? WHERE nom=? ");
       $insertimg->execute([$nom,$n]);
     }else{
      $erreur="erreur de l'importation d'un image";
     }

  }else{
     $erreur="votre photo de profil doit etre au format 'jpg','jpeg','png','PDF' ";}
}

if(isset($_FILES['imageries']) AND !empty($_FILES['imageries']['name'])){
    $img=$_FILES['imageries']['name'] ;
    $insertimg=$db->prepare("INSERT INTO images(nom, nomimage) VALUES(?, ?)");
    $insertimgok=$insertimg->execute([$n,$img]);
   if ($insertimgok) {
     $chemin="uploads/imageries/".$img;
     move_uploaded_file($_FILES['imageries']['tmp_name'] , $chemin);
   }
}

if ($insertok) {
header('location:listedosmed.php');
  /*?adressepar='.$_SESSION['nom']?adressepar=<?= $getnom ?> */
}else{echo " echec d'ajout ";}

 }
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
   left:73%; cursor:pointer;  top:5px; position:absolute;border-radius:20px;">
  <a href="/oRLcABIN/InscrConnect/deconnexion.php" style="font-weight:bold;font-size:16px; color:black; ">Deconexion</a>
</div>
  <?php if ($_SESSION['id']==1) { ?>
<div class="btn"   style="background-color:#F1AD10;float:right; width:200px;
   height:30px;
   right:10%;
   left:58%; cursor:pointer; top:5px; position:absolute;border-radius:20px;">
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
<li><a href="listedosmed.php">La liste des dossier medical</a> </li>
<li><a href="dosmed.php">Nouveau dossier medical</a></li>
</ul>
</div>

<div class="enghauche">
<h2>Nouveau Dossier Médicale</h2> 
<hr><br>
 <form  method="POST" enctype="multipart/form-data">
<div class="frm">
 <label>Prenez un photo pour le malade</label>
<input type="file" name="img" multiple="multiple" >
<br><hr><br>
 <input type="text" id="serviceDUprofesseur" name="serviceDUprofesseur" placeholder="SERVICE DU PROFESSEUR " title="SERVICE DU PROFESSEUR" required >

<div class="deux">
<div class="deux1"> 
<input type="text" id="nompat" name="nom" placeholder=" Nom " title="nom patient" required>
<input type="text" id="prenompat" name="prenom" placeholder=" Prénom " title="prenom patient" required>
<input type="text" id="Profession" name="Profession" placeholder="Profession" title="Profession" required>
<input type="Date" id="dateNaisspat" name="dateNaisspat" placeholder="Date de Naissance" title="Date de naissance" required >
<input type="text" id="lieuDeNaiss" name="lieuDeNaiss" placeholder="lieu de Naissance " title="lieu de Naissance" required >
<input type="text" id="Domicile" name="Domicile" placeholder=" Domicile " title="Domicile" required>
</div>
<div class="deux2"> 
  <input type="text" id="salle" name="salle" placeholder=" salle " title="numero de salle" required>
<input type="text" id="lit" name="lit" placeholder=" N-lit " title="numero d'lit" required>
<input type="Date" id="Entre" name="Entre" placeholder=" Entré Le " title="la date d'entrer" required>
<input type="Date" id="Sortie" name="Sortie" placeholder=" Sortie Le " title="la date de Sortie" required>
<input type="text" id="numPatient" name="numPatient" placeholder="N-Matricule" title="Matricule" required>
<!--<input type="text" id="sexe" name="sexe" placeholder="sexe " title="Sexe" required>-->
<select name="sexe" id="sexe">   
<option style="color:black;">Masculin</option>
<option style="color:black;">Feminin</option>
</select>
</div>
</div>
<div><label for=adressepar>adresse par : </label>
<input type="text" id="adressepar" name="adressepar" value="<?= $_SESSION['nom']?>" placeholder="adressepar " required>
</div>
<div class="processus">
<label>processus :</label> <br>
<textarea  name="processus" id="processus" required> </textarea>
<!--<input type="text" id="processus" name="processus" placeholder=" processus " required>-->
</div>

<div class="trait">
<label>TRATEMENT SUBIS :</label><br>
<textarea  name="traitementSubis" id="TRATEMENT" required> </textarea>

<!--<input type="text" id="traitementSubis" name="traitementSubis" placeholder=" Traitement Subis " required>-->
</div>
<hr>
<div class="num">
<input type="text" id="telPAT" name="telPAT" placeholder=" numéro téléphone " title="numero de téléphone" required>
</div> 
<div> 
 <label>les imageries</label>
<input type="file" name="imageries" multiple="multiple" >
</div>
<input type="submit" name="ajout" value="Ajouter" />
<input type="reset" name="" value="Annuler" />
</div>
<?php if (!empty($erreur)) {
echo $erreur ; 
} ?>
</form>
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
               color:#A27CDB;}
.enghauche strong{font-size: 19px;}*/
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
.deux1{width: 50%; min-height:300px;}
.deux2{width: 49.5%; min-height:300px;}
.deux div{display:inline-table;}
.enghauche div label{ font-weight:bold;
  font-size:16px;
  color:black;
  line-height:40px;
}
.processus{
  width:100%;
  min-height:300px;
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
background: rgba(0, 0, 0, 0.3);
left:20%;
border-radius: 5px;
}
.input-frm{
display: flex;
flex-direction:column;
}
::-webkit-input-placeholder{
  font-weight:bold;
  color:rgba(0, 0, 0, 0.7);
}
.frm input,textarea,select{
cursor:default;
 max-width: 350px;
color: white;
margin: 4px 0;
background:transparent;
border: none;
border-bottom:2px solid white ; 
padding: 10px;
width: 100%;
}
textarea #TRATEMENT{min-height: 80px;}
textarea #processus{min-height: 300px;}
.frm input[type="submit"],input[type="reset"]
{ cursor: pointer;
  border: none;
  outline: none; 
  height: 30px; 
  width: 45%;
  background:#469CCA ;
  color: #fff ; 
  font-size: 12px ;
  border-radius: 10px;
}

</style>

</body>
</html> 
