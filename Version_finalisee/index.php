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