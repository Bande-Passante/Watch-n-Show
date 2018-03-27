<<<<<<< HEAD
<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=wnsdb;charset=utf8','root','');
}
catch(exception $e)
{
  die('Erreur : ' .$e->getMessage());
}
?>

<head>
  <title>LANDING PAGE </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style_formulaire.css" media="screen"/>
  <link rel="stylesheet" href="css/style_index.css" media="screen"/>
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
      <form onsubmit="connexion(this); return false;" method="post" action="hud_watch_n_show.html">
        <div id="contain_globale">
          <div class="under_box">
            <div id="contain_one">
              <div class="center">
                <div class="right_row_one">
                  <label class="color_one" for="header_identifiant">Adresse e-mail ou mobile</label>
                </div>
                <div class="right_row_two">
                  <input type="texte" id="header_identifiant" value="" placeholder="identifiant" onkeyup="name_on_key_up(this)"/>
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
                  <input type="password" id="header_password" value="" placeholder="password" onkeyup="password_on_key_up(this)"/>
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
                <a href="hud_watch_n_show.html"><input id="btn_fin_one" type="button" value="Connexion" title="Go"/></a>
              </div>
              <div class="right_row_three_btn" >
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </header>

  <div class="landing_row_two">

    <div class="landing_row_two_col_one">
      <div class="grid">
        <div class="slider-box">
          <div class="slider" id="slider">
            <div class="slider__item">
              <img class="img" src="img/img1.jpg"  alt="">
            </div>
            <div class="slider__item">
              <img class="img" src="img/img2.jpg"    alt="">
            </div>
            <div class="slider__item">
              <img class="img" src="img/img3.jpg"    alt="">
            </div>
            <div class="slider__item">
              <img class="img" src="img/img4.jpg"    alt="">
            </div>
            <div class="slider__item">
              <img class="img" src="img/img5.jpg"    alt="">
            </div>
                        <div class="slider__item">
              <img class="img" src="img/img6.jpg"    alt="">
            </div>
                        <div class="slider__item">
              <img class="img" src="img/img7.jpg"    alt="">
            </div>
                        <div class="slider__item">
              <img class="img" src="img/img8.jpg"    alt="">
            </div>
                        <div class="slider__item">
              <img class="img" src="img/img9.jpg"    alt="">
            </div>
                        <div class="slider__item">
              <img class="img" src="img/img10.jpg"    alt="">
            </div>
                        <div class="slider__item">
              <img class="img" src="img/img11.jpg"    alt="">
            </div>
          </div>
          <div class="slider-nav">
            <div class="slider-nav__prev" id="prev"><i class="fa fa-angle-left"></i></div>
            <div class="slider-nav__next" id="next"><i class="fa fa-angle-right"></i></div>
            <!-- <div class="slider-nav__dots" id="dots"></div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="landing_row_two_col_two">
      <!-- ajout de (this) + lien avec la fonction js ==================================== -->
      <form onsubmit="soumettre(this); return false;" method="post">
        <div class="form_row_one">
          <div id="column_one">
            <div class="column_one_row_one_center">
              <div id="title">
                <div id="inscription">Inscrivez-vous</div>
                <div id="inscription_oupas">Watch'N'Show</div>
              </div>

              <div class="row_with_column_one">
                <div class="col_one">
                  <label for="name">Pseudo</label>
                </div>
                <div class="col_two">
                  <input type="texte" id="name" value="" placeholder="ici doit s'écrire votre nom" onkeyup="verifPseudo(this)"/>
                </div>
                <div class="col_three">
                  <img src="img/check_ok.png" class='check_ok' id="check_ok_name"/>
                  <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_name"/>
                </div>
              </div>

              <div class="row_with_column">
                <div class="col_one">
                  <label for="date">Date de naissance</label>
                </div>
                <div class="col_two">
                  <input type="date" id="date" value="" placeholder="00/00/0000" onblur="verification_date(this)" />
                </div>
                <div class="col_three">
                  <img src="img/check_ok.png" class='check_ok'  id="check_ok_date"/>
                  <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_date"/>
                </div>
              </div>

              <div class="row_with_column">
                <div class="col_one">
                  <label for="mail">Adresse Mail</label>
                </div>
                <div class="col_two">
                  <input type="texte" id="mail" value="" placeholder="E-mail" onkeyup="verifMail(this)"/>
                </div>
                <div class="col_three">
                  <img src="img/check_ok.png" class='check_ok' id="check_ok_mail"/>
                  <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_mail"/>
                </div>
              </div>

              <div class="row_with_column">
                <div class="col_one">
                  <label for="password">Mot de passe</label>
                </div>
                <div class="col_two">
                  <input type="texte" id="password" value="" onkeyup="verifMDP(this)"/>
                </div>
                <div class="col_three">
                  <img src="img/check_ok.png" class='check_ok' id="check_ok_password"/>
                  <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_password"/>
                </div>
              </div>

              <div class="row_with_column">
                <div class="col_one">
                  <label id="align_password" for="password_confirm" >Confirmer mot de passe</label>
                </div>
                <div class="col_two">
                  <input type="texte" id="password_confirm" value="" onkeyup="verifConfiMDP(this)"/>
                  <div id="password_confirm_test"></div>
                </div>
                <div class="col_three">
                  <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_password_confirm"/>
                  <img src="img/check_ok.png" class='check_ok' id="check_ok_password_confirm"/>
                </div>
              </div>

              <div class="row_with_column">
                <div class="col_one">
                </div>
                <div class="col_two">
                  <select id="list_select" onblur="verifSexe(this)">
                    <option class="xx" value="">sexe</option>
                    <option class="xx" value="femme">Femme</option>
                    <option class="xx" value="homme">Homme</option>
                    <option class="xx" value="autre">Autre</option>
                    <!-- Changement pour l'affichage homme/femme/autre ==================== -->
                  </select>
                  <div id="output_list_select"></div>
                </div>
                <div class="col_three">
                  <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_list_select"/>
                  <img src="img/check_ok.png" class='check_ok' id="check_ok_list_select"/>
                </div>
              </div>

              <div class="row_with_column">
                <div class="col_one">
                </div>
                <div class="col_two">
                  <div class="txt_cgu">
                    <p id="cgu_scale"><a href="CGU.html" target="_blank" title="Cliquez pour les conditions légales d'utilisation">J'accepte vos clauses et conditions</a></p>
                  </div>
                  <div class="check_cgu">
                    <input id="checkbox" type="checkbox" value="" onclick="checkbox_on_click(this)" value="Connexion" />
                    <div id="checkbox_test"></div>
                  </div>
                </div>
                <div class="col_three">
                  <div class="col_ckeck">
                    <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_checkbox"/>
                    <img src="img/check_ok.png" class='check_ok' id="check_ok_checkbox"/>
                  </div>
                </div>
              </div>

              <div class="boutons">
                <div id="btn_valider">
                  <input class="btn_fin" type="submit" value="Valider" title="Inscription"/>
                </div>
              </div>

            </div>
          </div>
        </div>
      </form>

    </div>
  </div>

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

  </footer>

  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/script_slide.js" type="text/javascript"></script>
  <script src="js/script_formulaire.js" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_c2ulGxjFnZqMoNTJnBDT_JPqVieb1kM&callback=initMap"></script>

</body>
=======
<?php 
include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/init.php");

include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/cookies.php");

include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/top_index.php"); 
?>

<div class="landing_row_two">
  <div class="landing_row_two_col_one">
    <div class="grid">
      <div class="slider-box">
        <div class="slider" id="slider">
          <div class="slider__item">
            <img class="img" src="img/img1.jpg"  alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img2.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img3.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img4.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img5.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img6.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img7.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img8.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img9.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img10.jpg"    alt="">
          </div>
          <div class="slider__item">
            <img class="img" src="img/img11.jpg"    alt="">
          </div>
        </div>
        <div class="slider-nav">
          <div class="slider-nav__prev" id="prev"><i class="fa fa-angle-left"></i></div>
          <div class="slider-nav__next" id="next"><i class="fa fa-angle-right"></i></div>
        </div>
      </div>
    </div>
  </div>

  <div class="landing_row_two_col_two">
    <!-- ajout de (this) + lien avec la fonction js ==================================== -->
    <form method="post" action="index.php">
      <div class="form_row_one">
        <div id="column_one">
          <div class="column_one_row_one_center">
            <div id="title">
              <div id="inscription">Inscrivez-vous</div>
              <div id="inscription_oupas">Watch'N'Show</div>
            </div>
            <div class="row_with_column_one">
              <div class="col_one">
                <label for="name">Pseudo</label>
              </div>
              <div class="col_two">
                <input type="texte" id="name" name="pseudo" value=""/>
              </div>
              <div class="col_three">
                <img src="img/check_ok.png" class='check_ok' id="check_ok_name"/>
                <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_name"/>
              </div>
            </div>
            <div class="row_with_column">
              <div class="col_one">
                <label for="date">Date de naissance</label>
              </div>
              <div class="col_two">
                <input type="date" id="date" name="birth_date" value="" placeholder="00/00/0000"/>
              </div>
              <div class="col_three">
                <img src="img/check_ok.png" class='check_ok'  id="check_ok_date"/>
                <img src="img/check_pas_ok.png" class='check_ok'  id="check_pas_ok_date"/>
              </div>
            </div>
            <div class="row_with_column">
              <div class="col_one">
                <label for="mail">Adresse Mail</label>
              </div>
              <div class="col_two">
                <input type="texte" id="mail" name="email"
                value="" placeholder="E-mail"/>
              </div>
              <div class="col_three">
                <img src="img/check_ok.png" class='check_ok' id="check_ok_mail"/>
                <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_mail"/>
              </div>
            </div>
            <div class="row_with_column">
              <div class="col_one">
                <label for="password">Mot de passe</label>
              </div>
              <div class="col_two">
                <input type="texte" id="password" name="password" value=""/>
              </div>
              <div class="col_three">
                <img src="img/check_ok.png" class='check_ok' id="check_ok_password"/>
                <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_password"/>
              </div>
            </div>
            <div class="row_with_column">
              <div class="col_one">
                <label id="align_password" for="password_confirm" >Confirmer mot de passe</label>
              </div>
              <div class="col_two">
                <input type="texte" id="password_confirm" name="password_confirm" value=""/>
                <div id="password_confirm_test"></div>
              </div>
              <div class="col_three">
                <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_password_confirm"/>
                <img src="img/check_ok.png" class='check_ok' id="check_ok_password_confirm"/>
              </div>
            </div>
            <div class="row_with_column">
              <div class="col_one">
              </div>
              <div class="col_two">
                <select id="list_select" name="gender" >
                  <option class="xx" value="">sexe</option>
                  <option class="xx" value="femme">Femme</option>
                  <option class="xx" value="homme">Homme</option>
                  <option class="xx" value="autre">Autre</option>
                  <!-- Changement pour l'affichage homme/femme/autre ==================== -->
                </select>
                <div id="output_list_select"></div>
              </div>
              <div class="col_three">
                <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_list_select"/>
                <img src="img/check_ok.png" class='check_ok' id="check_ok_list_select"/>
              </div>
            </div>

            <div class="row_with_column">
              <div class="col_one">
              </div>
              <div class="col_two">
                <div class="txt_cgu">
                  <p id="cgu_scale"><a href="CGU.html" target="_blank" title="Cliquez pour les conditions légales d'utilisation">J'accepte vos clauses et conditions</a></p>
                </div>
                <div class="check_cgu">
                  <input id="checkbox" type="checkbox" value="" value="Connexion" />
                  <div id="checkbox_test"></div>
                </div>
              </div>
              <div class="col_three">
                <div class="col_ckeck">
                  <img src="img/check_pas_ok.png" class='check_ok' id="check_pas_ok_checkbox"/>
                  <img src="img/check_ok.png" class='check_ok' id="check_ok_checkbox"/>
                </div>
              </div>
            </div>
            <div class="boutons">
              <div id="btn_valider">
                <input class="btn_fin" type="submit" value="Valider" title="Inscription"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<?php include ($_SERVER["DOCUMENT_ROOT"]."/watch_n_show/prog/footer_index.php"); ?>
>>>>>>> g.chalas
