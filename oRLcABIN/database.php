<?php
$db = new PDO('mysql:host=localhost;dbname=servorl', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



/*$dsn = 'mysql:dbname=cabinetmedical;host=localhost';
$user = 'root';
$password ='';
try {
    $dbh = new PDO($dsn, $user, $password);
    echo "connection ok !";
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}*/
