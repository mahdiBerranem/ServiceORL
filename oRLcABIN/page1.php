<?php 
include $_SERVER['DOCUMENT_ROOT'].'/oRLcABIN/InscrConnect/connexion.php';

   if(isset($_POST['creercomp'])){
    if (!empty($_POST['choix'])) {
    $choix=$_POST['choix'];
    if ($choix== 'medecin') {
      header('Location:InscrConnect/inscription.php');
    }else{
      header('Location:InscrConnect/inscriptionInferm.php');}
    }  
  }
  if(isset($_POST['recup_submit'])){
    if (!empty($_POST['choix'])) {
    $_SESSION['choixchoix']=$_POST['choix'];
     header('Location:InscrConnect/recuperationmdp.php');
    
    }  
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page d'accueil</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- important size ecran-->
<link rel="stylesheet" type="text/css" href="menunev.css">
</head>
<body >
<div class="esp">

 <div class="toggle" title="Espace profesionnel"></div>
  <div class="overlay"></div>
  <script src="Bootstrap/jquery/jquery.slim.min"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('.toggle').toggleClass('active')
      $('.overlay').toggleClass('active') 
     $('.loginbox').toggleClass('active')
      //$('.erreur').toggleClass('active')

    })
  })
</script> 



  
<a href="https://www.google.com/maps/d/embed?mid=1MTxw7HRbVLjhnQIQSyjnkThTHsrNQaFG" target="_blanc" title="Trouver l'emplacement" style="color:rgb(0,0,0,0.6); font-size:17px; font-weight:bold; text-decoration:none; right:30%;  line-height:30px; padding-right: 50px; position:fixed; ">Plan d'accée |</a>
</div>

<div class="ab"> 
 <header >
 	<a href="page1.php" class="imgg" title="Service d'ORL(Oto-Rhino-Laryngologie) et de chirurgie cervico-faciale du CHU de Annaba"><img src="imagepage1/ooo.png"></a>
    <h2 style="text-align:center ; text-shadow:0 2px 5px rgb(0,0,0,.5);"> Service d'ORL(Oto-Rhino-Laryngologie) et de</br>
	 chirurgie cervico-faciale du CHU de Annaba</h2>
   <nav> 
       <ul>
       	   <li><a href="/oRLcABIN/decouvrer le service/contacterLeServiceParTlf.php">Découvrir le service</a>
               <ul> 
               	   <li><a href="/oRLcABIN/decouvrer le service/contacterLeServiceParTlf.php">Contacter le service par téléphone</a></li>
               	   <li><a href="/oRLcABIN/decouvrer le service/Consultation.php">Consultation</a></li>
                   <li><a href="/oRLcABIN/decouvrer le service/Hospitalisation.php">Hospitalisation</a></li>
               	   <li><a href="/oRLcABIN/decouvrer le service/EM.php">Equipe médicale</a></li>
               </ul>
       	   </li>
           <li><a  href="/oRLcABIN/les interventions/oreille.php">Les interventions</a>
           	   <ul> 
           	   	   <li><a href="/oRLcABIN/les interventions/oreille.php">Chirurgie de l'oreille</a></li>
           	   	   <li><a href="/oRLcABIN/les interventions/nez.php">Chirurgie de nez et des sinus</a></li>
           	   	   <li><a href="/oRLcABIN/les interventions/bouche.php">Chirurgie de cou et de la bouche</a></li>
                   <li><a href="/oRLcABIN/les interventions/urgence.php">Urgence</a></li>    
           	   </ul>
           </li>
           <li><a href="/oRLcABIN/orlped/Amygdales.php">ORL pidiatrique</a>  
           	   <ul> 
           	   	   <li><a href="/oRLcABIN/orlped/Amygdales.php">Amygdales,végétations et otites</a></li>
           	   	   <li><a href="/oRLcABIN/orlped/Amygdales.php">Phatologie du cou,du larynx et de la trachée</a></li>
           	   	   <li><a href="/oRLcABIN/orlped/Amygdales.php">Chirurgie des oreilles décollées</a></li>

           	   </ul>
           </li>
 <li><a href="/oRLcABIN/can/ccc.php">Cancérologie</a> </li>

       </ul>
   </nav>
</header>

<div class="leftbox">
<img src="imagepage1/gifent.gif" class="ph1">
<!--<video controls="controls" class="ph1"> <source src="Doctor ENT.mp4" /> </video>-->
</div>
<div class="rightbox">
<div  class="ph2" > <a href="/oRLcABIN/decouvrer le service/contacterLeServiceParTlf.php"><img src="imagepage1/btndemanderunrendezvous.jpg" width="200px"></a></div><br>
<div  class="ph3" ><a href="/oRLcABIN/decouvrer le service/contacterLeServiceParTlf.php"><img src="imagepage1/btncontacterleservice.jpg" height="90px" width="200px"  ></a></div><br>
<div class="jepr"> 
<h2>je prépare</br>ma venu</h2>
<ul> 
<li><a href="/oRLcABIN/decouvrer le service/Consultation.php">consultation</a></li>
<li><a href="/oRLcABIN/decouvrer le service/Hospitalisation.php">hospitalisation</a></li>
<li><a href="/oRLcABIN/decouvrer le service/EM.php">l'équipe medicale</a></li>
</ul> 
</div>
<br>
<div class="inter"> 
<h2>Les interventions</h2>
<ul> 
<li><a href="/oRLcABIN/les interventions/oreille.php">de l'oreille</a></li>
<li><a href="oRLcABIN/les interventions/nez.php">de nez et des sinus</a></li>
<li><a href="/oRLcABIN/les interventions/bouche.php">de cou et de la bouche</a></li>
</ul> 
</div> <br>
<div  class="cancér" > <a href="/oRLcABIN/can/ccc.php">Cancérologie</a> </div>
</div><br>

<div class="loginbox"> 
  <img src="/oRLcABIN/imagepage1/doc.jpg" class="avatar"> 
   <h1>Se connecter</h1>
      <form method="POST">
        <p>Votre mail</p>
        <input type="text" name="mailconnect" placeholder="Entrez votre mail" >
        <p>mot de passe</p>  
        <input type="password" name="mdpconnect" placeholder="Entrez mot de passe" >
        <p>Vous etes qui ?</p>
        <select name="choix">   
         <option style="color:#000">medecin</option>
          <option style="color:#000">infirmiere</option>
        </select>
        <input type="submit" name="formconnexion" value="connecter">     
      <button name="creercomp" class="btn btn-link">Creer un compte?</button><br>
     <button name="recup_submit" class="btn btn-link">Mot de passe oublier?</button>
      </form>
      <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
  </div>
<br>

<p id="p1" style="text-align:justify;">Le service d'ORL et de chirurgie cervico-faciale, dirigé par le Professeur S.KHAROUBI, prend en charge les pathologies du nez et des sinus, de l'oreille, de la bouche, du larynx, du pharynx et du cou. Le service est composé d'un pôle de consultations, d'un pôle d'explorations fonctionnelles (audiologie, phoniatrie, explorations vestibulaires) et d'un bloc opératoire.
</p>
<P id="p1" style="text-align:justify;">Outre la prise en charge des affections traditionnelles ORL, des secteurs plus spécifiques sont développés</P>
</div>
<!-- css -->

<style type="text/css">
.cancér{
border:none;
width: 200px;
height:35px;
text-align:center;
border-radius:10px; 
background-color:white;
margin-bottom:20px;
border-bottom:4px solid #C7C9CB; 
border-top:4px solid #C7C9CB;}
.cancér a{
	text-decoration:none;
	color:#F1AD10 ;
	font-weight:bold;
    font-size: 20px; }
.inter {
font-weight:bold;
font-size: 18px;
border:none;
width: 200px;
height:150px;
text-align:left;
margin-top: 20px;
border-top:5px solid #C7C9CB;
border-radius:10px;
border-bottom:5px solid #C7C9CB; 
padding-bottom:15px;}
.inter a{ color:black;
          text-decoration: none   }
.inter h2{
      color: #F1AD10;
	  text-align: center;}

.jepr{
font-weight:bold;
font-size: 18px;
border-radius:10px ;
border:none;
background:#C7C9CB;
width: 200px;
height:200px;
text-align:left;
}
.jepr h2{color:white;
	    text-align: center;}
.jepr a{color:black;
        text-decoration: none;}
.ph1{margin-left:20px;
     margin-top: 25px;
     max-width: 760px ;
     height:350px ;
     border-radius:5px;}
.rightbox{ right:30px;
           padding-top:25px;
           position:relative;    
           float:right;}
.rightbox div{
  display:block; 
}
@media screen and (max-width:900px){
nav ul li ul li{visibility:hidden;}
.rightbox{float:left; margin-right:10%; left:10%; width:80%;}
.jepr, .inter, .cancér{}
#p1{border-right:0px;}
.ph2, .ph3{width:220px;}
.esp a{padding-right:5px;}
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
.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
}
/*
LOGIN
*/
.toggle{
   position:fixed;
   width:200px;
   top:8px;
   height:30px;
   right:10%;
   left:75%;
   background:url(../oRLcABIN/imagepage1/btnespacepro.png) no-repeat;
   cursor: pointer; }
.toggle.active{z-index: 2;}
 .overlay{
   position:fixed;
   width:180px;
   top:8px;
   height:28px;
   right:11.3%;
   left:75%;
  border-radius:20px;
  background:rgba(0,0,0,.95);
  transition: transform 0.5s;
  z-index:-1; }
.overlay.active{
  transform:scale(100,100);
  z-index:1; }
.loginbox {
width: 320px;
height:420px;
background:#000;
color: #fff ;
top:35%;
left:50%;
position: absolute; 
transform: translate(-50%,-50%);
box-sizing: border-box;
padding: 70px 30px;
visibility:hidden;
z-index:1;
}
.loginbox.active{
  visibility:visible;
  transition-delay:0.3s;}
.avatar{ 
width: 100px ;
height: 100px ;
border-radius: 50% ;
position: absolute; 
top: -50px ;
left: calc(50% - 50px) ; 
}
h1{   
margin: 0 ;
padding: 0 0 20px;
text-align: center;
font-size: 22px ;
}
.loginbox p{
margin: 0; 
padding: 0;
font-weight: bold;
}
.loginbox input,select{ 
width: 100% ;
margin-bottom: 20px ;
} 

.loginbox input[type="text"],input[type="password"],select{
  border: none; 
  border-bottom: 1px solid #fff ;
  background: transparent;
  outline: none ;
  height: 40px;
  color:#fff ;
  font-size: 16px ;}
.loginbox input[type="submit"] {
  border: none;
  outline: none; 
  height: 40px; 
  background:#469CCA ;
  color: #fff ; 
  font-size: 18px ;
  border-radius: 20px; }
.loginbox input[type="submit"]:hover{
  cursor: pointer; 
  background: #2DC415;
  color: #000 ;}
.loginbox a{
text-decoration: none;
font-size: 12px; 
line-height: 20px;
color: darkgrey; 
}
.loginbox a:hover{

  color: #2DC415 ;}
.erreur {
position:absolute;
height:50px ;
width:320px ;
margin: 5px auto;
text-align: center; 
line-height: 50px ;
border:1px solid #FF3333;
color: #FF3333 ;
background-color: #FF8787 ; 
border-radius: 5px ;
transform: translate(160%,-50%);
z-index:2;
}
</style> 

</body>
</html> 
