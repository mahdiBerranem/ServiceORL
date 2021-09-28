<?php 
session_start();
$choix=$_SESSION['choixchoix'];
$bdd = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if (isset($_POST['change_submit'])) {
if (!empty($_POST['change_mdp']) AND !empty($_POST['change_mdpc'])){
     $mdp = htmlspecialchars($_POST['change_mdp']);
     $mdpc = htmlspecialchars($_POST['change_mdpc']);
            if($mdp == $mdpc) {
               $mdp = sha1($mdp);
               if ($choix=='medecin') {
               $sql="UPDATE docteur SET motpass=? WHERE email =?";
               }else{$sql="UPDATE infirmiere SET motpass=? WHERE email =?";}
               $ins_mdp = $bdd->prepare($sql);
               $ins_mdp->execute(array($mdp,$_SESSION['recup_mail']));
               header('Location:/oRLcABIN/page1.php');
            }else{$error="mot passe pas meme";}
        }else{$error="rempler les champs";}
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>recuperation de mdp</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8" style="top:100px;">
                        <div class="card">
                            <div class="card-header">Nouveau mot de passe de <?= $_SESSION['recup_mail'] ;?></div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" >

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Neveau mdp</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="change_mdp"/>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">confirmation mdp</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                             <input type="password" class="form-control" placeholder="Confirmation du mot de passe" name="change_mdpc"/>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Enregister" name="change_submit"/>
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