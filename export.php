<?php
$servername = 'localhost';
$username = 'root';
$password = '';

//On établit la connexion
$conn = new PDO("mysql:host=$servername;dbname=gestion_livraison", $username, $password);
$req=$conn->prepare("select * from image where id=? limit 1");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute(array($_GET["id"]));
$tab=$req->fetchAll();
echo $tab[0]["bin"];
?>