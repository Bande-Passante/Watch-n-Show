<?php
include ($_SERVER["DOCUMENT_ROOT"]."/wns/Version_finalisee/prog/init.php");

$pseudo = $_POST["header_identifiant"];
$pw = $_POST["header_password"];
// echo ("pseudo : ".$pseudo."\r\n");
// echo ("passwd : ".$pw."\r\n\r\n");

// echo "SELECT id FROM users WHERE pseudo LIKE '".$pseudo."' && pw LIKE '".$pw."'";
$reponse = $bdd->query("SELECT id FROM users WHERE pseudo LIKE '".$pseudo."' && pw LIKE '".$pw."'");

if ($reponse->rowCount() ==1) {
$user_session_data = $reponse->fetch();
$session_id = $user_session_data['id'];

echo ("je trouve ça dans la table users : ".$session_id);

setcookie('id',$session_id);  //,time()+365*24*3600,null,null,false,true  //,time()+365*24*3600,"/",null,false,true
// $_COOKIE['id']=$reponse;
echo $_COOKIE['id'];

}
	else {
		include ($_SERVER["DOCUMENT_ROOT"]."/wns/Version_finalisee/index.php");
		echo "
		<SCRIPT language=JavaScript>
		alert (\"tu t'es gouré\");
		</SCRIPT>
		";
		// header('Location: http://localhost/wns/Version_finalisee/index.php');
		exit();
	}




?>











<!DOCTYPE html>
<html>
	<head>
		<!-- Commentaire useless -->
		<meta charset="utf-8"/>
		<title>Accueil - Watch'n'Show</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/hud_watch_n_show.css">
		<link rel="stylesheet" type="text/css" href="jquery-ui-themes-1.12.1/jquery-ui.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link href="css/jquery.galereya.css" rel="stylesheet"/>
		<!-- <link href="css/jquery.galereyaM.css" rel="stylesheet"/> -->
		<script src="js/jquery-3.3.1.min.js"></script>

		
	</head>
		
	<body>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<!-- Header -->
		<header>
		<div class="container-fluid col-xl-12" style="padding: 0">
			<nav class="navbar bg col-xl-12 col-lg-12">
				
  					<form class="form-inline col-auto mr-auto">
    					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
   						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
   						<button class="btn btn-sm btn-outline-info" type="button">Mix-art !</button>
 					</form>
	 					<div class="btn-group btn-right" role="group" aria-label="Basic example">

	 						<a href="profil.html" ><img src="img/Miyamoto-Musashi.jpg" alt="PHOTO" class="rounded-circle" width="75px" height="75px"></a>
	 						<a id="profil_pseudo" href="profil.html" ><button type="button" class="btn btn-outline-light">Pseudo Pseudo-long</button></a>

	  						<button type="button" class="btn btn-outline-light">Messages
	  						<span class="badge badge-danger">9+</span></button>
	  						<button type="button" class="btn btn-outline-light">Notifications
	  						<span class="badge badge-danger">2</span></button>
	  						<button type="button" class="btn btn-outline-light">Paramètres</button>
						</div>
				
			</nav>
		</div>
		</header>
		
		<!--Entête -->
		<div class="jumbotron jumbotron-fluid">
  			<div class="container">
    			<h1 class="display-4">Type de contenu, Catégorie</h1>
    			<p class="lead">Tags communs avec la recherche.</p>
  			</div>
		</div>
		<!-- left -->
		<div style="margin: 0 0 0 350px"> 
			<div class="container-fluid">
  				<div class="row">
					<nav id="left">
						<img src="img/logo_rnonalisa_v03.png" width="200" height="200">
						<h1>Watch 'n' Show</h1>
						<button type="button" class="btn btn-outline-info btn-lg btn-block" style="	background-color: #091c24">Accueil</button>
						<div class="list-group">
  							<a class="btn btn-light btn-lg disabled">Sélection</a>
  							<div class="btn-group-toggle" data-toggle="buttons">
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off">Populaire
  								</label>
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> Émergent
  								</label>
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> Mes Abonnements
  								</label>
  							</div>
  						</div>
						<div class="list-group">
  							<a class="btn btn-light btn-lg disabled">Types</a>
  							<div class="btn-group-toggle" data-toggle="buttons">
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> Textes
  								</label>
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> Images
  								</label>
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> Musiques
  								</label>
  								<label class="btn btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> Vidéos
  								</label>
  								<label class="btn btn-danger btn-secondary active bcb">
 	   								<input type="checkbox" checked autocomplete="off"> NSFW (+18)
  								</label>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- //////////////////////////////////////////////////// -->
		<main>
			<div class="container" id="galleryherepls">
					<img src="img/img1.jpg" alt="Card image cap" data-fullsrc="img/img1.jpg" data-desc="Example"/>
					<img src="img/img2.jpg" alt="Card image cap" data-fullsrc="img/img2.jpg" data-desc="Example"/>
					<img src="img/img3.jpg" alt="Card image cap" data-fullsrc="img/img3.jpg" data-desc="Example"/>
					<img src="img/img4.jpg" alt="Card image cap" data-fullsrc="img/img4.jpg" data-desc="Example"/>
					<img src="img/img5.jpg" alt="Card image cap" data-fullsrc="img/img5.jpg" data-desc="Example"/>
					<img src="img/img6.jpg" alt="Card image cap" data-fullsrc="img/img6.jpg" data-desc="Example"/>
					<img src="img/img7.jpg" alt="Card image cap" data-fullsrc="img/img7.jpg" data-desc="Example"/>
					<img src="img/img8.jpg" alt="Card image cap" data-fullsrc="img/img8.jpg" data-desc="Example"/>
					<img src="img/img9.jpg" alt="Card image cap" data-fullsrc="img/img9.jpg" data-desc="Example"/>
					<img src="img/img10.jpg" alt="Card image cap" data-fullsrc="img/img10.jpg" data-desc="Example"/>
					<img src="img/img16.jpg" alt="Card image cap" data-fullsrc="img/img16.jpg" data-desc="Example"/>
					<img src="img/img15.jpg" alt="Card image cap" data-fullsrc="img/img15.jpg" data-desc="Example"/>
					<img src="img/img11.jpg" alt="Card image cap" data-fullsrc="img/img11.jpg" data-desc="Example"/>
					<img src="img/img12.jpg" alt="Card image cap" data-fullsrc="img/img12.jpg" data-desc="Example"/>
					<img src="img/img13.jpg" alt="Card image cap" data-fullsrc="img/img13.jpg" data-desc="Example"/>
					<img src="img/img14.jpg" alt="Card image cap" data-fullsrc="img/img14.jpg" data-desc="Example"/>
					<img src="img/img17.jpg" alt="Card image cap" data-fullsrc="img/img17.jpg" data-desc="Example"/>
					<img src="img/img18.jpg" alt="Card image cap" data-fullsrc="img/img18.jpg" data-desc="Example"/>
					<!-- //////////////////////////////////////////////////// -->
			</div>
		</main>

		<div id="popupinformation">
			<img id="vide" src="">
		</div>
	</body>
	<script src="js/jquery.galereya.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/hud_watch_n_show.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>

</html>