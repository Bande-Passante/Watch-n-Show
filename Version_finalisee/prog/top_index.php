<!DOCTYPE html>	
<head>
	<meta charset="utf-8" />
	<base href="http://localhost/watch_n_show/"/>
	<title>LANDING PAGE </title>
	<link rel="stylesheet" href="css/style_formulaire.css"/>
	<link rel="stylesheet" href="css/style_index.css"/>
	<link rel="stylesheet" href="css/style_slide.css" />
	<link rel="stylesheet" href="css/style_footer.css" />
</head>	

<body>
	<header>
		<div id="header_left">
			<a href="" title="retour à l'accueil"><div id="logo"><img src="img/monalisa03.png"/></div></a>
			<div id="user_list">
				<p>Watch'n'Show</p>
			</div>
		</div>
		<div id="header_right">
			<form method="post" action="index.php">
				<div id="contain_globale">
					<div class="under_box">
						<div id="contain_one">
							<div class="center">
								<div class="right_row_one">
									<label class="color_one" for="header_identifiant">Adresse e-mail ou identifiant</label>
								</div>
								<div class="right_row_two">
									<input type="texte" id="header_identifiant" name="identifiant" value="" placeholder="email ou identifiant"/>
								</div>
								<div class="right_row_three">
								</div>
							</div>
						</div>
						<div id="contain_two">
							<div class="center">
								<div class="right_row_one">
									<label class="color_one" for="header_password">Mot de passe</label>
								</div>
								<div class="right_row_two">
									<input type="password" id="header_password" name="user_password" value="" placeholder="password"/>
								</div>
								<div class="right_row_three">
									<p class="color_one">Informations de compte oubliées ?</p>
								</div>
							</div>
						</div>
					</div>
					<div id="contain_three">
						<div class="center">
							<div class="right_row_one_btn">
							</div>
							<div class="right_row_two_btn">
							<input id="btn_fin_one" type="submit" value="Connexion" title="Go"/></a>
							</div>
							<div class="right_row_three_btn" >
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</header>
	<!-- <?php
	if (!empty($_POST['identifiant'])){
		$identifiant=$_POST['identifiant'];
	$pseudos = $bdd->query("SELECT PSEUDO FROM users WHERE PSEUDO ='.$identifiant'");
	$donnees_pseudos=$pseudos->fetch();



	$user_password=$_POST['user_password'];
	$passwords = $bdd->query("SELECT PASSWORD FROM users WHERE PASSWORD ='.$user_password'");
	$donnees_password=$passwords->fetch();

	if (($identifiant == $donnees_pseudos['PSEUDO'] AND $user_password == $donnees_password['PASSWORD'])){

		session_start();
		$_SESSION['PSEUDO']= $identifiant;
		echo "Bienvenue !";
	}
	else{
		echo "Mauvais identifiant ou mot de passe";
	}
}
?> -->