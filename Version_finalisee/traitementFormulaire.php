<?php include ($_SERVER["DOCUMENT_ROOT"]."/wns/Version_finalisee/prog/init.php");  ?>
<!-- __________________________________________________________________________________________________________________________________________________________________________________ -->

<?php
						$pseudo = $_POST 	["pseudo"];
                        $birth = $_POST 	["birth"];
						$mail = $_POST  	["mail"];
						$pw = $_POST 	    ["pw"];
						$gender = $_POST 	["gender"];


echo "INSERT INTO users (pseudo) VALUES ('".$pseudo."','".$birth."','".$mail."','".$pw."','".$gender."')";

$bdd->exec("INSERT INTO users (pseudo, birth, mail, pw, gender) VALUES ('".$pseudo."','".$birth."','".$mail."','".$pw."','".$gender."')");


echo 'Mission accomplie : Votre user '.$pseudo.' a été inséré !';

// $bdd->exec("INSERT INTO users (pseudo, birth, mail, pw, gender) VALUES (".$pseudo.",".$birth.",".$mail.",".$pw.",".$gender.")");

?>