<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>STAR WARS</title>
    <link rel="icon" type="image/png" href="img/favicon.png"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


<div class="container-fluid all mx-0 px-0">


    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar py-lg-0">
            <a class="pr-5" href="index.php"><img class="logo" src="img/logo.svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto py-xl-custom">
                    <li class="nav-item">
                        <a class="star-link pr-5" href="#home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="star-link pr-5" href="#tp">Travaux</a>
                    </li>
                    <li class="nav-item">
                        <a class="star-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <div id="main" class="py-3">
                    <div id="player">
                        <div class="" id="image">
                            <img src="img/clone_logo.png">
                        </div>
                        <div class="px-3" id="titreMusique">Star Wars Main Theme</div>
                        <div class="" id="boutons">
                            <i id="pre" onclick="pre()" class="fas fa-step-backward"></i>
                            <i id="play" onclick="playOrPauseSong()" class="fas fa-pause px-1"></i>
                            <i id="next" onclick="next()" class="fas fa-step-forward"></i>
                        </div>
                    </div>
                    <div class="" id="loadingbar">
                        <div id="fill"></div>
                    </div>
                    <div id="currentTime">00:00 / 00:00</div>
                </div>
            </div>
        </nav>
    </header>

    <div id="star" class="mx-0 px-0">

        <section id="presentation">

            <section class="intro d-flex justify-content-center">
                Il y a bien longtemps, dans un IUT lointain,<br>très lointain....
            </section>

            <section class="logo_intro">
                <svg id="Calque_2" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 687.26 309.17"><defs><style>.cls-1{fill:none;stroke:#ffe919;stroke-width:6px;}</style></defs><title>logo_intro</title><path class="cls-1" d="M105.1,194.25l20-131.95h51.54l34.65,54.83L245.72,62.3h51.54v132H245.72V139.42l-33.11,54.83h-2.86l-43.11-54.83-10,54.83Z" transform="translate(-3.19 -59.3)"/><path class="cls-1" d="M326,194.25V62.3h51.54l34.65,54.83L446.65,62.3h51.54v132H446.65V139.42l-33.11,54.83h-2.86l-33.11-54.83v54.83Z" transform="translate(-3.19 -59.3)"/><path class="cls-1" d="M527,62.3H578.5l20,132H537Z" transform="translate(-3.19 -59.3)"/><path class="cls-1" d="M123.94,309.54l-16.67,55.93H55.73l-48.25-132H59l21.71,57,18.86-57H147l22,57,14.69-57h51.54l-39.7,132H144Z" transform="translate(-3.19 -59.3)"/><path class="cls-1" d="M205.51,365.47l52.08-132h78.62l53,132H329.31l-10-23.76h-47l-10,23.76Zm91.56-102.71L274.37,315H318Z" transform="translate(-3.19 -59.3)"/><path class="cls-1" d="M648.85,272.81h38.6V233.52H601q-30.25,0-36,24.49t32.46,53.73q23.13,15.17-7.9,14.44H515.51l-11.84-12.62q18.42-3.65,28.29-10.05t13.82-15.9q3.94-9.5-.44-27.05a42.8,42.8,0,0,0-18-18.64Q515.07,235,496,233.52H392.92v132h57.24V321.88l50.22,43.59H640.52q34.22-4.75,34.87-29.24t-34.87-50.44Q620.67,272.08,648.85,272.81ZM497,288.75a14.84,14.84,0,0,1-6.91,2H450.16V266.41H490c1.76,0,3.93.81,6.53,2.43s4.07,4.94,4.44,10Q500.7,286.79,497,288.75Z" transform="translate(-3.19 -59.3)"/></svg>
            </section>

            <div id="board">
                <div id="content">
                    <p id="title">Semestre III</p>
                    <p id="subtitle">LE RETOUR DU CODEUR</p>
                    <br>
                    <p>Après un long et intense troisième semestre, Théo Pruvot est noté sur son devoir final du module
                        m3206 par le seigneur Sith Dark Libbrecht.
                        <br>Il a choisi le thème "Star Wars" pour illustrer son portfolio. Il a également fait un chat
                        interactif, un jeu Canevas ainsi qu'un formulaire de contact
                        le tout en se basant sur les sages enseignements de maitre Meuzeret.
                        <br><br>Son site conviendra t-il aux exigences du seigneur sith ? Scrollez pour le savoir !</p>
                </div>
            </div>
        </section>

    </div>

    <section id="home">
        <svg class="d-none d-lg-block">
            <symbol id="text">
                <text text-anchor="middle" x="50%" y="50%">STar waRS</text>
            </symbol>
            <use xlink:href="#text"></use>
        </svg>
        <h1 class="titre d-lg-none">STar waRS</h1>
        <div class="video">
            <div class="color-overlay"></div>
            <video autoplay loop muted>
                <source class="test_video" src="asset/video.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <div id="star">

        <section id="tp" class="">
            <div class="margin_top pt-5">
                <h2 class="titre_section text-uppercase text-center">travaux</h2>
                <div class="row mt-5 mx-0 px-0">
                    <div class="container">
                        <div class="col-12">
                            <h3 class="titre_h3">CHAT INTERACTIF</h3>
                            <p class="paragraph">Un chat interactif réalisé avec ajax, puis amélioré par mes soins
                                pour être plus ergonomique et esthetique. La base de données comporte 2 tables
                                (utilisateur
                                et message). L'enregistrement du mot de passe est encodé avec du md5 et les caractères
                                spéciaux
                                des messages sont bloqués pour se protéger des injections SQL.<br>
                                Plusieurs tests sont réalisés pour améliorer le chat (détection de la photo de profil,
                                affichage
                                différent entre ce qui est reçu et ce qui est envoyé, la date en hover sur le
                                message...)<br>
                                Vous pouvez vous connecter avec les utlisateurs déjà créé (mot de passe : toto) ou en
                                créer
                                des nouveaux.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-center container_list">
                            <div class="list_user">
                                <div class="header_list_user msg_head">
                                    <h4 class="titre_header_list text-uppercase pl-3 m-0">Les utilisateurs :</h4>
                                </div>
                                <div class="body_list_user">
                                    <div id="affichage_list_user" class="msg_card_body">
                                        <?php
                                        require 'affiche_user.php';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 mt-5 pt-5 mx-0 px-0">

                    <div class="container-chat d-flex justify-content-center">
                        <div id="login-box" class="login-box">
                            <h4>Login</h4>
                            <form id="connexion" action="connexion.php" method="post">

                                <div class="text-box d-flex align-items-center">
                                    <i class="fas fa-user"></i>
                                    <input type="text" id="login" name="login" placeholder="Login...">
                                </div>

                                <div class="text-box  d-flex align-items-center">
                                    <i class="fas fa-unlock"></i>
                                    <input type="password" id="mdp" name="mdp" placeholder="Mot de passe...">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button class="btn-box" type="submit" id="" title="Connexion">CONNEXION</button>
                                </div>

                            </form>

                            <h4>New</h4>
                            <form id="compte" action="compte.php" method="post">

                                <div class="text-box d-flex align-items-center">
                                    <i class="fas fa-user"></i>
                                    <input type="text" maxlength="20" id="login_new" name="login_new"
                                           placeholder="Login...">
                                </div>

                                <div class="text-box  d-flex align-items-center">
                                    <i class="fas fa-unlock"></i>
                                    <input type="password" id="mdp_new" name="mdp_new" placeholder="Mot de passe...">
                                </div>

                                <div class="pdp-box">
                                    <div class="d-flex justify-content-center mb-1">
                                        <i class="fas fa-camera camera_icon"></i>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <select id="select" name="select"
                                                style="background: url('img/pdp/guest_1.jpg')no-repeat center; background-size: cover;"
                                                onchange="change();">
                                            <option selected
                                                    style="background: url('img/pdp/guest_1.jpg')no-repeat center; background-size: cover;"
                                                    value="guest_1.jpg">1
                                            </option>
                                            <option style="background: url('img/pdp/boba.jpg')no-repeat center; background-size: cover;"
                                                    value="guest_2.jpg">2
                                            </option>
                                            <option style="background: url('img/pdp/yoda.jpg')no-repeat center; background-size: cover;"
                                                    value="guest_3.jpg">3
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center pb-3">
                                    <button class="btn-box text-uppercase" type="submit" id="" title="acc_new">creer un
                                        compte
                                    </button>
                                </div>

                            </form>

                            <audio id="saber_sound" src="audio/vador_breath.mp3"></audio>
                            <audio id="saber_sound2" src="audio/saber_open_1.mp3"></audio>
                        </div>
                    </div>

                    <div id="chat" class="chat d-none d-flex justify-content-center" style="position: absolute;">
                        <div class="card">
                            <div class="card-header msg_head">
                                <div id="resultat_connexion" class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="img/pdp/vador.jpg" class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <p>Connecté en tant que :</p>
                                        <span>Dark Vador</span>
                                    </div>
                                </div>
                            </div>

                            <div id="affichage" class="card-body msg_card_body">

                            </div>

                            <div class="card-footer">
                                <form id="chat_ajax" action="dire.php" method="get" class="input-group">
                                        <textarea id="text_msg" name="text_msg" class="form-control type_msg"
                                                  placeholder="Ecris ton message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="submit" id="" class="input-group-text send_btn"><i
                                                    class="fas fa-location-arrow"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="row mx-0 px-0 mt-5 pt-5">

                <div class="container mt-5">
                    <div class="col-12">
                        <h3 class="titre_h3">JEU CANEVAS</h3>
                        <p class="paragraph">Un jeu Canevas codé en javascript, réalisé à l'aide d'un tutoriel pour recréer
                            le cèlebre
                            "flappy bird". Une fois terminé, les sons, les sprites, les dimensions des objets, les
                            décors ont été modifiés
                            pour coller avec le thème Star Wars.<br>
                            Vous jouez donc Boba Fett, un chasseur de prime en mission sur Tatooine, et vous devez
                            esquiver les pipes avec votre
                            jet pack.<br>
                            Les controles sont simples : cliquez sur le canevas pour lancer une partie, un click vous
                            permet de faire un saut, cliquez sur start
                            pour recommencer.<br>
                            Attention, le jeu n'est pas disponible sur téléphone !
                        </p>
                    </div>

                    <div class="col-12 mx-0 px-0 d-flex justify-content-center mt-5">
                        <canvas id="canevas" class="d-none d-md-block d-lg-block d-xl-block" width="600"
                                height="480"></canvas>
                        <h3 class="d-sm-block d-md-none d-lg-none d-xl-none text-center titre2">Pour jouer au jeu, connectez vous sur
                            un ordinateur.</h3>
                    </div>
                </div>

            </div>
        </section>



        <section id="contact" class="contact">
            <h2 class="titre_section text-center margin_top mb-5">NEWSLETTER</h2>

            <form class="container-contact mx-auto news" id="news" action="valid_news" method="post">

                <div class="mb-4 pading_top">
                    <div id="b_prenom" class="text-box2">
                        <label for="prenom"><span>*</span></label>
                        <input type="text" id="prenom" name="prenom" class="" placeholder="Prenom">
                        <p  id="me_prenom" class="message-erreur"></p>
                    </div>
                    <div id="b_nom" class="text-box2">
                        <label for="nom"><span>*</span></label>
                        <input type="text" id="nom" name="nom" class="" placeholder="Nom">
                        <p  id="me_nom" class="message-erreur"></p>
                    </div>
                </div>

                <div id="b_email" class="text-box2">
                    <label for="email"><span>*</span></label>
                    <input type="text" id="email" name="email" class="" placeholder="E-mail">
                    <p  id="me_email" class="message-erreur"></p>
                </div>


                <div class="d-flex justify-content-center mt-3">
                    <button class="btn-box" type="submit" id="" title="submit">S'inscrire</button>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <small id="" class="form-text text-muted pb-3">Les champs avec un * sont obligatoires</small>
                </div>

            </form>
            <div id="msgOK">
                <p>Que la force soit avec vous !</p>
            </div>
        </section>

        <section id="footer" class="">
            <footer class="mt-5 pb-3">
                <p class="text-center txt_footer" >Copyright 2019 - Theo PRUVOT</p>
            </footer>
        </section>

    </div>

</div>

<script type="text/javascript">

    var songs = ["audio/star_wars_main_theme.mp3", "audio/imperial_march.mp3", "audio/cantina_band.mp3", "audio/throne_room_theme.mp3"];
    var posters = ["img/clone_logo.png", "img/vador_logo.png", "img/boba_logo.png", "img/r2d2_logo.png"];
    var titreMusique = ["Star Wars Main Theme", "Marche Impériale", "Cantina Band", "Salle du Trone Theme"];

    var fillBar = document.getElementById("fill");
    var currentTime = document.getElementById("currentTime");

    var musique = new Audio();
    var currentSong = 0;

    window.onload = playSong;

    function playSong() {
        musique.src = songs[currentSong];

        musique.play();
    }

    function playOrPauseSong() {
        if (musique.paused) {
            musique.play();
            $("#play").removeClass("fa-play");
            $("#play").addClass("fa-pause");
        } else {
            musique.pause();
            $("#play").removeClass("fa-pause");
            $("#play").addClass("fa-play");
        }
    }

    musique.addEventListener('timeupdate', function () {

        var position = musique.currentTime / musique.duration;

        fillBar.style.width = position * 100 + '%';

        convertTime(Math.round(musique.currentTime));
        if (musique.ended) {
            next();
        }
    });

    function convertTime(seconds) {
        var min = Math.floor(seconds / 60);
        var sec = seconds % 60;

        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10) ? "0" + sec : sec;
        currentTime.textContent = min + ":" + sec;
        totalTime(Math.round(musique.duration));
    }

    function totalTime(seconds) {
        var min = Math.floor(seconds / 60);
        var sec = seconds % 60;

        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10) ? "0" + sec : sec;
        currentTime.textContent += "/" + min + ":" + sec;
    }

    function next() {
        currentSong++;
        if (currentSong > songs.length - 1) {
            currentSong = 0;
        }
        playSong();
        $("#play").removeClass("fa-play");
        $("#play").removeClass("fa-pause");
        $("#play").addClass("fa-pause");
        $("#image img").attr("src", posters[currentSong]);
        $("#titreMusique").html(titreMusique[currentSong]);
    }

    function pre() {
        currentSong--;
        if (currentSong < 0) {
            currentSong = 3;
        }
        playSong();
        $("#play").removeClass("fa-play");
        $("#play").removeClass("fa-pause");
        $("#play").addClass("fa-pause");
        $("#image img").attr("src", posters[currentSong]);
        $("#titreMusique").html(titreMusique[currentSong]);
    }

</script>
<script type="text/javascript" src="js/select.js"></script>
<script type="text/javascript" src="js/game.js"></script>
<script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {

        function removeErrorHover(element){
            $('#b_'+element).removeClass('invalid');
            $('#me_'+element).html('');
        }

        $('#prenom').change(function () {
            removeErrorHover('prenom');
        });

        $('#nom').change(function () {
            removeErrorHover('nom');
        });

        $('#email').change(function () {
            removeErrorHover('email');
        });

        $('#news').submit(function (event) {
            console.info('envoi du formulaire');
            event.preventDefault();
            removeErrorHover('nom');
            removeErrorHover('prenom');
            removeErrorHover('email');
            newsInscription();
        });

        function newsInscription() {
            var postData = $('#news').serialize();

            $.ajax({
                type: 'POST',
                url: 'valid_news.php',
                dataType: 'json',
                data: postData,

                success: function (reponse) {

                    if (reponse === true){

                        $("#news").fadeOut(function () {

                            $("#saber_sound2")[0].play();
                            $('#msgOK').slideToggle();

                        });

                    }else{
                        $.each(reponse, function (champs, erreur) {

                            $( "#me_"+champs).html(erreur);

                            $( "#b_"+champs).addClass('invalid');

                        });
                    }

                },

                error: function () {
                    console.log('Oupsi');
                }
            });




        }
    });
</script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!--MON CHAT-->
<script type="text/javascript" src="js/chat.js"></script>

</body>

</html>