<?php
session_start();
$choix=$_SESSION['choixchoix'];
$bdd = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {
   if(!empty($_POST['recup_mail'])) {
      $recup_mail = htmlspecialchars($_POST['recup_mail']);
      if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL)) {
         if ($choix=='medecin') {
          $sql="SELECT * FROM docteur WHERE email = ?";
          }else{$sql="SELECT * FROM infirmiere WHERE email = ? ";}
          $reqmail = $bdd->prepare($sql);
          $reqmail->execute(array($recup_mail));
          $mailexist = $reqmail->rowCount();
         if($mailexist == 1) {  
          $_SESSION['recup_mail'] = $recup_mail;
          header('location:r.php');
        }else{$error= "cette adresse n'est pas enregestrer";}
}else{$error= "Adresse mail invalide";}
}else{$error="rempler les champs";}
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Recuperation de mdp</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container" >
<div class="row justify-content-center">
                    <div class="col-md-8"  style="top:100px;">
                        <div class="card">
                            <div class="card-header">Récupération de mot de passe</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Votre adresse mail</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <input type="email"  class="form-control"  placeholder="Votre adresse mail" name="recup_mail"/>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Valider" name="recup_submit"/>
                                    </div>
                               </form>
                        </div>
                        <?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>'; } else { echo ""; } ?>
                    </div>
                </div> 
         
        
</body>
</html>
<style type="text/css">
 body{
  background: url(../b.jpg) repeat-y center  top #9dbdd7 ;
} 
</style>