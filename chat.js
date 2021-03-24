$(document).ready(function () {


    // ENVOYER UN MESSAGE
    function sendMessage(text_msg){

        var url = 'dire.php?text_msg=' + text_msg;

        $('#text_msg').val('');
        $.ajax({url: url})
    }


    // CONNEXION
    $('#connexion').submit( function (event) {

        event.preventDefault();

        let login = $('#login').val();
        let mdp = $('#mdp').val();

        $.ajax({
            url: 'connexion.php',
            type: 'POST',
            data: {
                login: login,
                mdp: mdp,
            },

            success : function(code_html, statut){
                console.log('success');
                console.log(code_html);
                console.log(statut);

                $('#resultat_connexion').html(code_html);
                $('#login-box').addClass("d-none");
                $('#chat').removeClass("d-none");
                $("#saber_sound")[0].play();

                //AFFICHE & RAFFRAICHIT LE CHAT
                $('#chat').css("position", "static");
                $('#chat').animate({opacity:1}, 2000);

                setInterval(function () {

                    $.get('affiche.php', function (data) {

                        $('#affichage').html(data)

                    })

                }, 1000);

            },

            error : function(resultat, statut, erreur){
                console.log('error');
                console.log(resultat.responseText);
                console.log(statut);
                console.log(erreur);

                $('#resultat_connexion').html(resultat.responseText);
            },


            complete : function(resultat, statut){
                console.log('complete');
                console.log(resultat);
                console.log(statut);
            }
        });

    });



    // CREER UN COMPTE
    $('#compte').submit( function (event) {

        event.preventDefault();

        let login_new = $('#login_new').val();
        let mdp_new = $('#mdp_new').val();
        let pdp_new = $('#select').val();

        $.ajax({
            url: 'compte.php',
            type: 'POST',
            data: {
                login_new: login_new,
                mdp_new: mdp_new,
                select: pdp_new,
            },

            success : function(code_html, statut){
                console.log('success');
                console.log(code_html);
                console.log(statut);

                $('#resultat_connexion').html(code_html);
                $('#login-box').addClass("d-none");
                $('#chat').removeClass("d-none");
                $("#saber_sound")[0].play();

                //AFFICHE & RAFFRAICHIT LE CHAT
                $('#chat').css("position", "static");
                $('#chat').animate({opacity:1}, 2000);

                setInterval(function () {

                    $.get('affiche.php', function (data) {

                        $('#affichage').html(data)

                    })

                }, 1000);

            },

            error : function(resultat, statut, erreur){
                console.log('error');
                console.log(resultat.responseText);
                console.log(statut);
                console.log(erreur);

                $('#resultat_connexion').html(resultat.responseText);
            },


            complete : function(resultat, statut){
                console.log('complete');
                console.log(resultat);
                console.log(statut);
            }
        });

    });


    // BLOQUE FORM DE L'ENVOI DE MESSAGE
    $('#chat_ajax').submit(function (event) {

        event.preventDefault();

        var text_msg = encodeURI($('#text_msg').val());

        sendMessage(text_msg);

    });

    $("#text_msg").keypress(function (e) {
        if(e.which == 13 && !e.shiftKey) {
            $(this).closest("#chat_ajax").submit();
            e.preventDefault();
        }
    });

});