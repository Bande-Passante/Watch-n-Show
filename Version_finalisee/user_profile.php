<?php include ("prog/init.php"); ?>
<?php include ("prog/top.php"); ?>

<?php $reponse=$bdd->query('SELECT * FROM users WHERE ID='.$_GET['ID']);
$donnees=$reponse->fetch();
?>
		<!--                       Identity                     -->
		<div class="col-xl-8">
			<div id="formulaire">
				<h2>Identité</h2>
					<div class="container">
						<div class="row">
							<div class="col-xl-6">
								<label for="nom">Mail</label><br/>
								<p><?php echo $donnees['MAIL']; ?></p>
							</div>
							<div class="col-xl-6">
								<label for="nom">password</label><br/>
								<p><?php echo $donnees['PASSWORD']; ?></p>
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
			<?php $friends=$bdd->query('SELECT * FROM users');
			while ($datafriends=$friends->fetch()){?>
			<div class="col-xl-8"><?php echo $datafriends['PSEUDO'];?></div>
			<div class="xol-xl-4"><?php echo $datafriends['Statut'] ?></div>
			<?php 
		} 
			?>
		</div>
	</div>

<?php include ("prog/footer.php"); ?>