<?php
                      // création de cookie

if (!empty($_POST['identifiant']) && !empty($_POST['user_password'])){

$user_pseudo=$_POST['identifiant'];
$user_pwd=$_POST['user_password'];

             // Requête de vérif pseudo dans base de données

$id_user = $bdd -> query ("SELECT * FROM users WHERE pseudo ='".$user_pseudo."'");

$datauser = $id_user -> fetch();

if ($datauser['pseudo'] == $user_pseudo){

  setcookie("pseudo", $user_pseudo, time() + 30*24*3600, false);

  $_COOKIE['pseudo']=$user_pseudo;
}

else{
    echo "erreur";
}
}

?>