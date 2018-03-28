<?php include ($_SERVER["DOCUMENT_ROOT"]."/wns/Version_finalisee/prog/init.php");




$reponse = $bdd->query('SELECT *, COUNT(users_id1) AS total FROM followers JOIN users ON users.id = followers.users_id WHERE users.pseudo LIKE "%ab%" GROUP BY users_id ORDER BY total DESC' );

while ($donnees=$reponse->fetch()){
   echo "L'utilisateur " .$donnees['pseudo'] ." a  " .$donnees['total'] ." followers !" ."<br>\r\n";
};

?>