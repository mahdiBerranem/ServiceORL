<!-- -->
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
	<meta charset="utf-8">
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
 <a href="/oRLcABIN/page1.php" class="imgg" title="Service d'ORL(Oto-Rhino-Laryngologie) et de chirurgie cervico-faciale du CHU de Annaba"><img src="/oRLcABIN/ooo.png"></a>
    <h2 style="text-align:center ; text-shadow:0 2px 5px rgb(0,0,0,.5);"> Service d'ORL(Oto-Rhino-Laryngologie) et de</br>
   chirurgie cervico-faciale du CHU de Annaba</h2>
   <nav> 
       <ul>
       	   <li><a href="contacterLeServiceParTlf.php">Découvrir le service</a>
               <ul> 
               	   <li><a href="contacterLeServiceParTlf.php">contacter le service par téléphone</a></li>
               	   <li><a href="Consultation.php">Consultation</a></li>
                   <li><a href="Hospitalisation.php">Hospitalisation</a></li>
               	   <li><a href="EM.php">Equipe médicale</a></li>
               </ul>
       	   </li>
           <li><a href="/oRLcABIN/les interventions/oreille.php">Les interventions</a>
           	   <ul> 
           	   	   <li><a href="/oRLcABIN/les interventions/oreille.php">Churirgie de l'oreille</a></li>
           	   	   <li><a href="/oRLcABIN/les interventions/nez.php">Churirgie de nez et des sinus</a></li>
           	   	   <li><a href="/oRLcABIN/les interventions/bouche.php">Churirgie de cou et de la bouche</a></li>
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
</br>
</br>
       </ul>
   </nav>
</header>
<div class="as">
 <div class="endroit"> 
<h4>Découvrir le service</h4> 
<hr>
<ul>
<li><a href="contacterLeServiceParTlf.php">contacter le service par téléphone</a> </li>
<li><a href="Consultation.php">Consultation</a></li>
<li><a href="Hospitalisation.php">Hospitalisation</a></li>
<li><a href="EM.php">Equipe médicale</a> </li>
</ul>
</div>
<div class="igm"> 
<img src="10.jpg" width="400px" height="280px">
</div>
<div class="enghauche">
<h2>Contacter le service par téléphone</h2>
<h3>Prise de RDV : 0655669988</h3>
<h3>Fax: 038389090</h3>
<li>Service de hospitalisation :038385644</li> 
<h2>Secrétariats médicaux:</h2>
<li>Pr S.Kharoubi(chef de service) : </li>
<p>Tél:038389090 </br> 
 ORL générale, Chirurgie cervico-faciale, Cancérologie ORL, Troubles de la déglutition, Otoneurochirurgie et chirurgie de la base du crâne, Chirurgie endocrinienne, ORL pédiatrique
</p>
<li>Pr Benyahia(Praticien hospitalier) : </li>
<p>Tél:038389090 </br> 
ORL générale, Chirurgie cervico-faciale, Cancérologie ORL, Chirurgie endocrinienne, ORL pédiatrique
</p> 
<li>Dr Abada(Praticien hospitalier) : </li>
<p>Tél:038389090 </br> 
ORL générale, Chirurgie cervico-faciale, Cancérologie ORL, Chirurgie endocrinienne, ORL pédiatrique
</p> 
<li>Dr Gouri(Praticien hospitalier) : </li>
<p>Tél:038389090 </br> 
ORL générale, Chirurgie cervico-faciale, Cancérologie ORL, Chirurgie endocrinienne, ORL pédiatrique
</p> 
<div class="loginbox"> 
  <img src="/oRLcABIN/doc.jpg" class="avatar"> 
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
</div></div>

</div>
<!-- css -->
<style type="text/css">
p{text-align:justify;}
.endroit{
	margin-left:10px;
	margin-right:5px;
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
  max-width:400px;
}
.enghauche h2{color:#ff9900;}
.enghauche li{list-style:none;
              text-decoration:underline;
               color:#A27CDB;}

.as div{display:inline-table;}
.igm{padding-left:15px;
     margin-top: 15px;
     float: right;
     margin-right:10px;}
@media screen and (max-width:1039px){
.endroit {width:90%;}
.endroit ul li a{text-align:center;}
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
z-index:2;
}
</style>

</body>
</html> 