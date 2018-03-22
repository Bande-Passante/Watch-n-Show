<footer>
  <div id="foot_left">
    <div id="map">
    </div>
    <div id="foot_left_right">
      <a href="" title="retour à l'accueil">
        <div id='logo_foot'>
        </div>
        <div id="users">
          <a href="user_list.html"> Ils participent déjà à l'aventure Watch'N'Show
          </a>
        </div>
      </a>
    </div>
  </div>
  <div id="foot_right">
    <div id="foot_right_left">
      <ul>
        <li id="title_footer"><a href="" title="Bande Passante">LA BANDE PASSANTE</a></li>
        <li>33, Grand Rue</li>
        <li>26000 VALENCE</li>
        <li>Téléphone : + 33 (0)4 75 00 00 00</li>
        <li>De 09h à 17h du lundi au vendredi</li>
        <li>contact@labandepassante.com</li>
      </ul>
    </div>
    <div id="foot_right_right">
      <ul>
        <li id="title_footer"><a href="" title="c'est chez nous">NOTRE SITE</a> </li>
        <li><a href="" title="Accueil">Accueil</a> </li>
        <li><a href="xxx.html" title="Artistes">Decouvrir des artistes</a> </li>
        <li><a href="yyy.htmtitle" title="c'est chez nous">Decouvrir des oeuvres aléatoirement</a> </li>
        <li><a href="zzz.htmtitl" title="Manuel du site">Manuel d'utilisation du site</a> </li>
        <li><a href="vvv.htmtitle" title="Profil">Mon profil</a> </li>
        <li><a href="mentions.html" title="Mentions légales">Mentions légales</a> </li>
        <li><a href="blog" title="">Actus</a> </li>
        <li><a href="contact" title="">Contactez-nous !</a> </li>
      </ul>
    </div>
  </div>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/script_slide.js" type="text/javascript"></script>
  <script src="js/script_formulaire.js" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_c2ulGxjFnZqMoNTJnBDT_JPqVieb1kM&callback=initMap"></script>

</footer>
</body>

<?php
if (!empty($_POST['pseudo'])){
  $pseudo = $_POST['pseudo'];
  $mail = $_POST['email'];
  $password = $_POST['password'];

  $bdd->exec("INSERT INTO users (PSEUDO, MAIL, PASSWORD) VALUES ( '$pseudo', '$mail', '$password')");
}
?>