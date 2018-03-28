<?php include ($_SERVER["DOCUMENT_ROOT"]."/wns/Version_finalisee/prog/init.php");

// $wantedID = 

$reponse = $bdd->query('SELECT * FROM users WHERE id='.$_COOKIE['id']);
$donnees = $reponse->fetch();



echo ("iiiiiiiii    ".$donnees['id']."   iiiiiiiiiiiiii");



// $reponse->closeCursor();

 ?>

    <!-- __________________________________________________________________________________________________________________________________________________________________________________ -->

    <!-- Block central -->
    <div id="main" class="row">

        <!-- Données du profile -->

        <div class="form-row">
            <div id="requis" class="col-md-7">
                <h1>Compte Utilisateur</h1>

                <h2>Informations requises :</h2>
                <div class="form-row">
                    <div class="col-md-6">
                        <label>Pseudo</label>
                            <p class="userdata">
                                <?php
                                    echo $donnees ['pseudo'];
                                ?>
                            </p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>E-mail</label>
                            <p class="userdata">
                                <?php
                                    echo $donnees ['mail'];
                                ?>
                            </p>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <label>Mot de passe</label>
                            <p class="userdata">
                                <?php
                                    echo $donnees ['pw'];
                                ?>
                            </p>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            <div id="avatar" class="col-md-4">
                <img class="img-circle" src="<?php
                                    echo $donnees ['profile_pic'];
                                ?>" width="200" height="200">
            </div>
        </div>
        <h2>Informations facultatives :</h2>
        <div class="form-row">
            <div class="col-md-3">
                <label>Prénom</label>
                    <p class="userdata">
                        <?php
                            // echo $donnees ['prenom'];
                        ?>
                    </p>
            </div>
            <div class="col-md-3">
                <label>Nom</label>
                    <p class="userdata">
                        <?php
                            // echo $donnees ['nom'];
                        ?>
                    </p>
            </div>
            <div class="col-md-3">
                <label>naissance</label>
                    <p class="userdata">
                        <?php
                            echo $donnees ['birth'];
                        ?>
                    </p>
            </div>
            <div class="col-md-" 4 "">
                <div class="form-group">
                    <label>Genre</label>
                    <p class="userdata">
                                <?php
                                echo $donnees ['gender'];
                                ?>
                            </p>
                </div>
            </div>
        </div>


    </div>


    <!-- __________________________________________________________________________________________________________________________________________________________________________________ -->
    