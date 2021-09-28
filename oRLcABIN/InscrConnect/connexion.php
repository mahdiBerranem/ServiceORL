<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   $choix =$_POST['choix'];
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      if ($choix=='medecin') {
        $sql="SELECT * FROM docteur WHERE email = ? AND motpass = ?";
      }
      else{$sql="SELECT * FROM infirmiere WHERE email = ? AND motpass = ?";}
      $requser = $bdd->prepare($sql);
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         if ($userinfo['confirme']==1) {
         if ($choix=='medecin') {         
         $_SESSION['id'] = $userinfo['doc_id'];
         $_SESSION['nom'] = $userinfo['nom'];
         $_SESSION['mail'] = $userinfo['email']; 
        header("Location:/oRLcABIN/espaceprofesionnel/listeRDV.php?id=".$_SESSION['id']); }
         else{
          $_SESSION['id'] = $userinfo['doc_id'];
           header("Location:/oRLcABIN/espaceprofesionnel/infirmiere/listeRDV.php?id=".$_SESSION['id']); }
      }else{$erreur ="Attendez que votre compte soit confirmé";}
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

