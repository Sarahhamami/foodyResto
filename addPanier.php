<?php
session_start();
require '_header.php';
date_default_timezone_set( 'Africa/Tunis');
$id=  $_GET['id'];
$username=$_SESSION['username'];
$date_ins=date('Y-m-d h:i:s');

if (isset($_GET['id'])){
  var_dump($_GET['id']);
  $sql= $DB->query("SELECT price,menu_name FROM menu where ID_menu='$id'");
  
    print $sql->price;

  $sth = $DB->query("INSERT INTO cart (id, username , date_ins, price, menu_name) VALUES ('$id', '$username', '$date_ins','$sql->price', '$sql->menu_name' )");
echo 'Entrée ajoutée dans la table';
}
 
?>
