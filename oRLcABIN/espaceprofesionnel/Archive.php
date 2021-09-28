<?php 
session_start();
//connection a la bese 
 $db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
//preparation requete 
 $adressepar=$_SESSION['nom'];
 if(isset($adressepar) AND $adressepar ) {
 if (!empty($_POST['search'])) {
  $search=$_POST['search'];
   $sql="SELECT * FROM `dossier malade`
  WHERE numdossier LIKE '%".$search."%'
  OR nompat LIKE '%".$search."%' 
  OR prenompat LIKE '%".$search."%' ";
}else{  
   $sql="SELECT * FROM `dossier malade` ORDER BY numdossier DESC" ;
 }
   $requser = $db->prepare($sql);
   $requser->execute(array($adressepar));
//recuperation resultat une seul foi
$listdosmed = $requser->fetchall(PDO::FETCH_OBJ);
//var_dump($listpastient);
 }else{echo "<style type='text/css'> body{background: url(../espaceprofesionnel/anon.png) repeat center top;} </style>"; exit();}
 ?>
 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--important size ecran-->
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/oRLcABIN/menunev.css">
<link rel="stylesheet" type="text/css" href="/oRLcABIN/menunev.css">
</head>
<body>
<div class="esp">
<div class="btn"  style="background-color:#F1AD10;float:right; margin:0 0 0 5px; width:180px;
   height:30px;
   right:10%;
   left:73%; cursor:pointer;  top:5px; position:absolute;border-radius:20px;">
  <a href="/oRLcABIN/InscrConnect/deconnexion.php" style="font-weight:bold;font-size:16px; color:black;">Deconexion</a>
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

</div>

<div class="enghauche">
<h2>Archive de Dossier Médicale</h2> 
<br> 
<form  method="post">
   <input class="form-control form-control-sm mr-3 w-75" type="text" name="search" placeholder="Rechercher par les détails de dossier medical ...">
</form>
<br><hr><br>
<form method="POST">
<table class="table table-bordered">
<tr>
<td>Numero dossier </td>  <td>Nom patient </td>  <td>Prenom patiet </td> <td>Action</td>
</tr>
 <?php foreach ($listdosmed as $dossiermedical):?> 
<tr>
<td ><?= $dossiermedical->numdossier ; ?></td> <td><?= $dossiermedical->nompat;?></td> <td><?= $dossiermedical->prenompat; ?></td> 
<td> 
<a href="afficherarchive.php?numdossier=<?= $dossiermedical->numdossier ;?>&&nompat=<?= $dossiermedical->nompat; ?>" class=" btn btn-info"> afficher</a>
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
  width:140px;

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
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}
.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}
.table-borderless th,
.table-borderless td{
  border: 0;
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}
.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}
</style>
</body>
</html>
