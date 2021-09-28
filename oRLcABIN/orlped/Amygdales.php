<?php 
include $_SERVER['DOCUMENT_ROOT']."/oRLcABIN/InscrConnect/connexion.php";
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
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--important size ecran-->
<link rel="stylesheet" type="text/css" href="/oRLcABIN/menunev.css">
</head>
<body>
<div class="toggle"></div>
  <div class="overlay"></div>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.toggle').click(function(){
      $('.toggle').toggleClass('active')
      $('.overlay').toggleClass('active') 
      $('.loginbox').toggleClass('active')
     
    })
  })
</script> 


<div class="esp">
  
<a href="https://www.google.com/maps/d/embed?mid=1MTxw7HRbVLjhnQIQSyjnkThTHsrNQaFG" width="640" height="480" target="_blanc" title="Trouver l'emplacement" style="color:rgb(0,0,0,0.6); font-size:17px; font-weight:bold; text-decoration:none; right:30%;  line-height:30px; padding-right: 50px; position: fixed; ">Plan d'accée |</a>
</div>

<div class="ab">   
 <header>
 <a href="/oRLcABIN/page1.php" class="imgg" title="Service d'ORL(Oto-Rhino-Laryngologie) et de chirurgie cervico-faciale du CHU de Annaba"><img src="/oRLcABIN/imagepage1/ooo.png"></a>
    <h2 style="text-align:center ; text-shadow:0 2px 5px rgb(0,0,0,.5);"> Service d'ORL(Oto-Rhino-Laryngologie) et de</br>
   chirurgie cervico-faciale du CHU de Annaba</h2>
   <nav> 
       <ul>
       	   <li><a  href="/oRLcABIN/decouvrer le service/contacterLeServiceParTlf.php">Découvrir le service</a>
               <ul> 
               	   <li><a href="/oRLcABIN/decouvrer le service/contacterLeServiceParTlf.php">contacter le service par téléphone</a> </li>
                   <li><a href="/oRLcABIN/decouvrer le service/Consultation.php">Consultation</a></li>
                   <li><a href="/oRLcABIN/decouvrer le service/Hospitalisation.php">Hospitalisation</a></li>
                   <li><a href="/oRLcABIN/decouvrer le service/EM.php">Equipe médicale</a> </li>
               </ul>
       	   </li>
           <li><a href="/oRLcABIN/les interventions/oreille.php">Les interventions</a>
           	   <ul> 
           	   	   <li><a href="/oRLcABIN/les interventions/oreille.php">Chirurgie de l'oreille</a></li>
           	   	   <li><a href="/oRLcABIN/les interventions/nez.php">Chirurgie de nez et des sinus</a></li>
           	   	   <li><a href="/oRLcABIN/les interventions/bouche.php">Chirurgie de cou et de la bouche</a></li>
                   <li><a href="/oRLcABIN/les interventions/urgence.php">Urgence</a></li>
           	   </ul>
           </li>
           <li><a href="/oRLcABIN/orlped/Amygdales.php" >ORL pidiatrique</a>  
           	   <ul> 
           	   	   <li><a href="/oRLcABIN/orlped/Amygdales.php">Amygdales,végétations et otites</a></li>
           	   	   <li><a href="/oRLcABIN/orlped/Amygdales.php">Phatologie du cou,du larynx et de la trachée</a></li>
           	   	   <li><a href="/oRLcABIN/orlped/Amygdales.php">Chirurgie des oreilles décollées</a></li>

           	   </ul>
           </li>
 <li><a href="/oRLcABIN/can/ccc.php">Cancérologie</a> </li>
</br>
</br>
       </ul>
   </nav>
</header>
<div class="as">
 <div class="endroit"> 
<h4>ORL pédiatrique</h4> 
<hr>
<ul>
<li><a href="#A">Amygdales, Végétations et Otite séromuqueuse</a></li>
<li><a href="#P">Pathologie du cou, du larynx et de la trachée</a></li>
<li><a href="#C">Chirurgie des oreilles décollées</a></li>
</ul>
</div>

<div class="enghauche">
<h2 id="A">Amygdales, Végétations et Otite séromuqueuse</h2>
<p> 
La prise en charge des pathologies ORL de l'enfant est réalisée dans le service de pédiatrie. Les interventions chirurgicales sont réalisées au bloc opératoire de pédiatrie de ce bâtiment, l'anesthésie étant assurée par l'équipe d'anesthésistes pédiatriques 

L'hospitalisation a lieu dans le service de chirurgie pédiatrique ou de Médecine du nourrisson et du jeune enfant (3ème étage)
<br>
<br>
<strong>Amygdalectomie :</strong>  Cette intervention nécessite une hospitalisation de 24 heures minimum (1 nuit). Vous pouvez accompagner votre enfant et bénéficier d'un lit accompagnant. La sortie a lieu le plus souvent le lendemain de l'intervention. Un traitement contre la douleur sera prescrit et un régime alimentaire vous sera proposé. 
<br>
<br>
<strong>Végétations et pose d'aerateurs_trans-tympaniques :</strong> ces interventions sont la plupart du temps réalisées en ambulatoire (sortie le jour de l'intervention). Un traitement contre la douleur sera prescrit et les précautions à prendre après la pose d'aérateurs vous seront expliquées. Il est déconseillé d'introduire de l'eau dans les oreilles. Les principaux soins consistent en la réalisation de lavage du nez au sérum physiologique ou eau salée  et un régime spécifique .
</p>

<h2 id="P">Pathologie du cou, du larynx et de la trachée</h2>
<p>L'équipe d'ORL travaille en étroite collaboration avec l'équipe de médecins anesthésistes-réanimateurs pédiatriques. La laryngologie et la chirurgie de la trachée de l'enfant ont été plus développées ces dernières années , afin de permettre la prise en charge médicale et chirurgicale de ces pathologies spécifiques.</p>

<h2 id="C">Chirurgie des oreilles décollées</h2>
<P> 
La chirurgie du pavillon de l'oreille pour oreilles décollées est appelée otoplastie. Elle consiste à redonner une forme classique au pavillon de l'oreille et à le recoller, par une cicatrice peu visible en arrière de l'oreille. Elle nécessite le plus souvent une nuit d'hospitalisation. Chez l'enfant, cette intervention est généralement réalisée si l'enfant est demandeur afin de lui permettre de comprendre le traitement et «d'adhérer » à ses soins. En pratique, cette intervention est réalisée après l'âge de 6 ans et en période de vacances scolaires.  Des pansements sont à réaliser, le plus souvent par une infirmière à la maison. Une consultation 8 jours plus tard permet de vérifier la bonne cicatrisation. Il est demandé à l'enfant de porter un bandeau non compressif pendant 15 jours jour et nuit et pendant 15 jours la nuit pour éviter de traumatiser l'oreille. Un arrêt de sport d'un mois est nécessaire. Cette intervention est prise en charge par la sécurité sociale. 
</P>
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
        <button name="creercomp" class="btn btn-link">Creer un compte?</button>
        <button name="recup_submit" class="btn btn-link">Mot de passe oublier?</button> 
      </form>
      <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
  </div>
<br>


</div>
</div>

</div>
<!-- css -->
<style type="text/css">
.endroit{
	margin-left:10px;
	margin-right: 10px;
	font-family: sans-serif;
	width:200px;
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
.enghauche {
 margin-right:15px;
  width:550px;
  margin-left:15px;
}
p{text-align:justify;}
.enghauche strong{font-size:18px;}
.enghauche h2{color:#ff9900;}
.as div{display:inline-table;}
@media screen and (max-width:1039px){
.endroit {width:90%;}
.endroit ul li a{text-align:center;}
.enghauche{width:auto;}
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
   cursor: pointer; 
}
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
  z-index:-1; 
}
.overlay.active{
  transform:scale(100,100);
  z-index:1; 
}
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
  transition-delay:0.3s;
}
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
.loginbox input[type="text"],input[type="password"],select
{
  border: none; 
  border-bottom: 1px solid #fff ;
  background: transparent;
  outline: none ;
  height: 40px;
  color:#fff ;
  font-size: 16px ;
}
.loginbox input[type="submit"] 
{
  border: none;
  outline: none; 
  height: 40px; 
  background:#469CCA ;
  color: #fff ; 
  font-size: 18px ;
  border-radius: 20px; 
}
.loginbox input[type="submit"]:hover
{
  cursor: pointer; 
  background: #2DC415;
  color: #000 ;
}
.loginbox a{
text-decoration: none;
font-size: 12px; 
line-height: 20px;
color: darkgrey; 
}
.loginbox a:hover{

  color: #2DC415 ;
}
.erreur {
height:50px ;
width:320px ;
margin: 5px auto;
text-align: center; 
line-height: 50px ;
border:1px solid #FF3333;
color: #FF3333 ;
background-color: #FF8787 ; 
border-radius: 5px ;
}
</style>

</body>
</html> 