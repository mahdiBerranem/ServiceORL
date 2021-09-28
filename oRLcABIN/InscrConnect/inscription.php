<?php
$bdd = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom=htmlspecialchars($_POST['prenom']);
   $pathologie=htmlspecialchars($_POST['pathologie']);
   $numero=htmlspecialchars($_POST['numero']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   if(!empty($_POST['nom'])AND !empty($_POST['prenom']) AND !empty($_POST['pathologie']) AND !empty($_POST['numero']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($nom);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM docteur WHERE email = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO docteur(nom,prenom,Pathologie,numero, email, motpass) VALUES(?, ?, ?,?,?,?)");
                     $insertmbr->execute(array($nom, $prenom, $pathologie, $numero, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé !";
                     
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Insciption</title>

<link href="/oRLcABIN/Bootstrap/css/bootstrap.min" rel="stylesheet" id="bootstrap-css">
<script src="/oRLcABIN/Bootstrap/js/bootstrap.min"></script>
<script src="/oRLcABIN/Bootstrap/jquery/jquery.slim.min"></script>

</head>
<body>

<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Inscription Medecin</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Voutre Nom</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez Voutre nom"  value="<?php if(isset($nom)) { echo $nom; } ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Voutre prenom</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Entrez Voutre prenom"  value="<?php if(isset($prenom)) { echo $prenom; } ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Pathologie </label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="pathologie" id="pathologie " placeholder="Entrez Voutre pathologie "  value="<?php if(isset($pathologie )) { echo $pathologie ; } ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Numero </label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="numero" id="numero " placeholder="Entrez Voutre numero "  value="<?php if(isset($numero )) { echo $numero ; } ?>"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Voutre Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="mail" id="email" placeholder="Entrez voutre Email" value="<?php if(isset($mail )) { echo $mail ; } ?>" />
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label for="email2" class="cols-sm-2 control-label">Confirmation Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="mail2" id="email2" placeholder="Confirmation voutre Email" value="<?php if(isset($mail2 )) { echo $mail2 ; } ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Mot de passe</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="mdp" id="password" placeholder="Entrez Mot de passe" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirme Mot de passe</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="mdp2" id="confirm" placeholder="Confirme Mot de passe" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="forminscription">Je m'inscris</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="/oRLcABIN/page1.php" name="login">Login</a>
                                    </div>
                                </form>
                            </div>
                <?php
                 if(isset($erreur)) {
                  echo '<font color="red">'.$erreur."</font>";
                  }
                 ?>
                        </div>
                    </div>
                </div>
                
            </body> 
            </html> 
<style type="text/css">
 body{
  background: url(../b.jpg) repeat-y center  top #9dbdd7 ;
} 
</style>