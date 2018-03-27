<?php 
include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/init.php");

include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/top_user_profile.php"); 

include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/sidebar.php")
?>


		<!--                       Identity                     -->
		<div class="col-xl-8">
			<div id="formulaire">
				<h2>Identité</h2>
				<div class="container">
					<div class="row">
						<div class="col-xl-6">
							<label for="nom">Mail</label><br/>
							<p><?php echo $donnees['mail']; ?></p>
						</div>
						<div class="col-xl-6">
							<label for="nom">password</label><br/>
							<p><?php echo $donnees['pw']; ?></p>
						</div>
					</div>
				</div>
				<h2>Dernières publications</h2>
				<div class="carousel">
					<ul class="pgwSlideshow">
						<li><img src="img/Concert.jpg"></li>
						<li><img src="img/Dessin.jpg"></li>
						<li><img src="img/Texte.jpg"></li>
						<li><img src="img/Video.jpg"></li>
						<li><img src="img/alps1.jpg"></li>
						<li><img src="img/alps2.jpg"></li>
						<li><img src="img/alps3.jpg"></li>
						<li><img src="img/alps4.jpg"></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-2">
			<div id="friends">
				<h2>Mes amis</h2>
				<?php $friends=$bdd->query('SELECT * FROM users LIMIT 0,8');
				while ($datafriends=$friends->fetch()){?>
				<div class="col-xl-8"><a href="http://localhost/watch_n_show/user_profile.php?ID=<?php echo $datafriends['id'];?>"><?php echo $datafriends['pseudo'];?></a></div>
				<?php 
			} 
			?>
		</div>
	</div>
	<?php include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/footer_user_profile.php"); ?>