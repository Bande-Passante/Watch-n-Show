

<head>
	<meta charset="utf-8"/>
	<title>Accueil - Watch'n'Show</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/hud_watch_n_show.css">
	<link rel="stylesheet" type="text/css" href="css/style_sidebar.css">
	<link rel="stylesheet" type="text/css" href="jquery-ui-themes-1.12.1/jquery-ui.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/jquery.galereya.css" rel="stylesheet"/>
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
					<a id="profil_pseudo" href="user_profile?id=" ><button type="button" class="btn btn-outline-light"> <?php echo $_COOKIE['pseudo']; ?> </button></a>

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

