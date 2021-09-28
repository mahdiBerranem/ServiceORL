<?php
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$numrdv=$_GET['numrdv'];
$pdoStat = $db->prepare('SELECT * FROM rendez_vous WHERE numrdv=:numrdv');
 //execution requete
$execut = $pdoStat->execute(['numrdv'=>$numrdv]);
$listrdv = $pdoStat->fetch(PDO::FETCH_OBJ);
if (isset($_POST['enregetrer'])) {
$nompat=($_POST['nom']);
$prenompat=($_POST['prenom']);
$daterdv=($_POST['daterdv']);
$doc_id_fk=($_POST['doc_id_fk']);
$execution=$db->prepare("UPDATE rendez_vous SET nompat=:nompat,prenompat=:prenompat,daterdv=:daterdv,doc_id_fk=:doc_id_fk WHERE numrdv=:numrdv");
$modifierok=$execution->execute(['nompat'=>$nompat,
                               'prenompat'=>$prenompat,
                               'daterdv'=>$daterdv,
                                'doc_id_fk'=>$doc_id_fk,
                                'numrdv'=>$numrdv]);
if ($modifierok) {
                header('location:listeRDV.php');} else{
                                                       echo " echec d'ajout rdv ";}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--important size ecran-->
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
</div>

<div class="ab">   
 <header>
   <a href="#" class="imgg" title="Service d'ORL(Oto-Rhino-Laryngologie) et de chirurgie cervico-faciale du CHU de Annaba"><img src="/oRLcABIN/ooo.png"></a>
    <h2 style="text-align:center ; text-shadow:0 2px 5px rgb(0,0,0,.5);"> Service d'ORL(Oto-Rhino-Laryngologie) et de</br>
   chirurgie cervico-faciale du CHU de Annaba</h2>
</header>
<div class="as">
 <div class="endroit"> 
<h4>Rendez-vous</h4> 
<hr>
<ul>
<li><a href="listeRDV.php">La liste des RDV</a> </li>
<li><a href="nvRDV.php">prendre RDV</a></li>
</ul>
</div>

<div class="enghauche">
<h2>Modifier RDV</h2>
<!--<form method="post" action=""> 
<input type="submit" name="" value="enregetrer"></form>--> 
<br><br><hr><br><br>

<form  method="POST" action="">
<div class="frm">  
<div class="input-frm" >
<input type="text" id="nompat" name="nom" value="<?= $listrdv->nompat ?>" placeholder=" Nom " required>
<input type="text" id="prenompat" name="prenom" value="<?= $listrdv->prenompat ?>" placeholder=" Prénom " required> 
<input type="date" id="daterdv" name="daterdv" value="<?= $listrdv->daterdv ?>" placeholder="date de rend-vous" required>
<input type="text" id="doc_id_fk" name="doc_id_fk" value="<?= $listrdv->doc_id_fk ?>" placeholder=" Nom Médecin Traitant" require>

</div> 
<input type="submit" name="enregetrer" value="Enregetrer" />
</div>
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
/*.enghauche input{
  width:80px;
  height:30px;
  border-radius:5px;
  background-color:red;
  font-weight:bold;
  font-size:16px;
  color:white;
  text-align:center;
  border:none; 
  cursor:pointer;
}
*/
.frm{
width:800px;
margin: 0 auto;
padding:10px;
background: rgba(0, 0, 0, 0.5);
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
.input-frm input{
max-width: 340px;
color: white;
margin: 4px 0;
background:transparent;
border: none;
border-bottom:2px solid white ; 
padding: 10px;
width: 100%;
}
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
