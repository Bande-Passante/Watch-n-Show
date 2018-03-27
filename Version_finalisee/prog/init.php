<?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=wnsbdd;charset=utf8','root','');
}
catch(exception $e)
{
  die('Erreur : ' .$e->getMessage());
}
?>