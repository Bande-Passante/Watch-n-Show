<?php include ("prog/init.php"); ?>

<head>
	<meta charset="utf-8" />
	<base href="http://localhost/watch_n_show/"/>
	<title>Profil - Watch'N'Show</title>
	<meta name="Réseau, Social, Watch, Show, Art, Création">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style_sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/style_profil.css">
	<link rel="stylesheet" type="text/css" href="css/pgwslideshow.min.css">
</head>

<?php $reponse=$bdd->query('SELECT * FROM users WHERE id='.$_GET['ID']);
$donnees=$reponse->fetch();
?>

<header>
	<div class="row">
		<div class="col-xl-12">
			<h1> Page de profil de <?php echo $_COOKIE['pseudo']; ?> </h1>
			<img  class="img-profil" src="img/mart-9-017-2.jpg" ></img>
			<label id="crayon" for="img-modif">
				<img id="crayon" src="img/crayon.png" width="20" height="20"/>
			</label>
			<input id="img-modif" type="file"/>
		</div>
	</div>
</div>
</header>