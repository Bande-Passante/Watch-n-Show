<?php include ("C:\wamp64\www\watch_n_show\prog\init.php"); ?>
<?php
$reponse=$bdd->query('SELECT * FROM users WHERE ID='.$_GET['ID']);
$donnees=$reponse->fetch();
?>

<!DOCTYPE html>	
<head>
	<meta charset="utf-8" />
	<title>Profil - Watch'N'Show</title>
	<meta name="Réseau, Social, Watch, Show, Art, Création">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style_profil.css">
	<link rel="stylesheet" type="text/css" href="css/pgwslideshow.min.css">
</head>

<body>	
	<!--                        Header                      -->
	<header>
		<div class="row">
			<div class="col-xl-12">
				<h1> Page de profil de <?php echo $donnees['PSEUDO']; ?> </h1>
				<img  class="img-profil" src="img/mart-9-017-2.jpg" ></img>
				<label id="crayon" for="img-modif">
					<img src="img/crayon.png" width="20" height="20"/>
				</label>
				<input id="img-modif" type="file"/>
			</div>
		</div>
	</div>
</header>
<!--                      Sidebar          		           -->
<div class="container-fluid">
	<div class="row">
		<div id="sidebar" class="col-xl-2">
			<a href="hud_watch_n_show.html"><button id="accueil" type="button" class="btn btn-primary1 btn-lg">Accueil</button></a>
			<!-- 1ère partie de la barre -->
			<div class="list-group">
				<button type="button" class="list-group-item list-group-item-action" disabled="on">Sélection</button>
				<button type="button" class="list-group-item list-group-item-action">Populaires</button>
				<button type="button" class="list-group-item list-group-item-action">Emergents</button>
				<button type="button" class="list-group-item list-group-item-action">Mes Abonnements</button> 
			</div>
			<!-- 2e partie de la barre -->
			<div class="list-group-1">
				<button type="button" class="list-group-item list-group-item-action" disabled="on">Type</button>
				<button type="button" class="list-group-item list-group-item-action">Textes</button>
				<button type="button" class="list-group-item list-group-item-action">Images</button>
				<button type="button" class="list-group-item list-group-item-action">Musiques</button>
				<button type="button" class="list-group-item list-group-item-action">Vidéos</button>
				<button type="button" class="list-group-item list-group-item-action">Aléatoire</button>
				<button id="nsfw" type="button" class="list-group-item list-group-item-action">NSFW (+18)</button>
			</div>
		</div>