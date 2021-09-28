<?php 
$db = new PDO('mysql:host=localhost;dbname=serviseorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nom=$_GET['nompat'];
    $affiche=$db->prepare("SELECT * FROM images WHERE nom=?");
    $affiche->execute(array($nom));
    $listimages = $affiche->fetchall(PDO::FETCH_OBJ);
   ?>
<?php foreach ($listimages as $imageries): ?>
    <img src="uploads/imageries/<?= $imageries->nomimage; ?>"   width="200" height="200" >
<?php endforeach;?>
<!--$dir = "./uploads/imageries/"; // $dir représente l'identifiant du bien qui doit être récupérer par une requette
//  si le dossier pointe existe
if (is_dir($dir)) {

    // si il contient quelque chose
    if ($dh = opendir($dir)) {
echo'<table><tr>';
$i=0;

        // boucler tant que quelque chose est trouve
        while (($file = readdir($dh)) !== false ) {
            // affiche le nom et le type si ce n'est pas un element du systeme
           // if( $file != '.' && $file != '..' && preg_match('#\.(jpe?g|gif|png)$#i', $file )) {
           if ($file = ($listimages->nomimage)) { 
               if($i==3){$i=0;ECHO'</tr>';}        
              if($i==0)echo'<tr><td><img align="left" width="200" src="'.$dir.'/'.$file.'"> </img> </td>';
              else echo'<td><img align="left" width="200" src="'.$dir.'/'.$file.'"> </img> </td>';
              $i++;
                }    
                }
        } 
    // } 
        echo'</table>';
        // on ferme la connection
        closedir($dh);
    }
//}-->