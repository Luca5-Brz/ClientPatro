<?php 
	include '_bd.php' ;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Menu</title>
    </head>
    <body>
        <?php
            include ("_header.php")
        ?>
        <main id="main_menu">
            <div id="type" class="foncee">
                <p>Types</p>
                <div id="bouttons" class="claire">
                    <div id="boutton_boissons" class="foncee">
                        <img src="img/boissons.png" alt="">
                        <p>Boissons</p>
                    </div>
                    <div id="boutton_bouffe" class="foncee">
                    <img src="img/bouffe.png" alt="">
                        <p>Bouffes</p>
                    </div>
                    <div id="boutton_grand" class="foncee">
                    <img src="img/grand.png" alt="">
                        <p>Grands</p>
                    </div>
                </div>
            </div>
            <div id="items">
                <?php 
                
                $result=$bd->query('SELECT produit.nom_produit, prix.prix FROM produit
                                    JOIN prix on prix.id_prix = produit.id_prix
                                    WHERE type=0 AND actif=1 ;');
                $result->execute();

                while($data = $result->fetch()) {
                    echo   '<div class="item claire">
                                <p class="nom">', $data['nom_produit'],' </p>
                                <p class="prix">',$data['prix']*1,' €</p>
                            </div>';
                }

                ?>
            </div>
            <div id="total" class="claire">
                <p class="foncee">Total €</p>
                <div id="produits" class="claire">
                    <div class="titre">
                        <p class="quantite">quantité</p>
                        <p class="nom">nom</p>
                        <p class="prix">prix</p>
                    </div>
                </div>
                <button class="foncee">Recommencer<img src="" alt=""></button>
            </div>
        </main>
        <footer>
            
        </footer>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="DataTables/jquery.dataTables.min.js"></script>
        <script src="Bootstrap/bootstrap.bundle.min.js"></script>
        <script src="js/bouton.js"></script>
        <script>

            $(document).ready(function() {

                $("#bouttons div").on("click", function() {
                    var type;
                    if ($(this).attr('id') == "boutton_boissons") {
                        type = 0;
                    }else if ($(this).attr('id') == "boutton_bouffe") {
                        type = 1;
                    }if ($(this).attr('id') == "boutton_grand") {
                        type = 2;
                    }

                    // Créer une requête AJAX
                    let xhr = new XMLHttpRequest();
                    xhr.open('POST', 'items.php', true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    // Définir ce qui se passe lorsque la requête est terminée
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            $("#items").html(xhr.responseText)
                        }
                    };

                    // Envoyer les données au serveur

                    xhr.send("type="+type);

                });

                $("#items").on("click", ".item", function() {

                    var item = $(this);
                    var objet;
                    var total = 0;

                    $("#produits .produit").each(function() {
                        if ($(this).find('.nom').text() == item.find('.nom').text()) {
                            objet =$(this);
                        }
                    });

                    if (typeof objet !== 'undefined') {
                        if (objet.find('.nom').text() == item.find('.nom').text()) {
                            objet.find('.quantite').text(parseInt(objet.find('.quantite').text()) + 1);
                            objet.find('.prix').text((parseFloat(item.find('.prix').text())*parseInt(objet.find('.quantite').text())+" €"));
                        }else {
                            $("#produits").append('<div class="produit"><p class="quantite">1</p><p class="nom">'+item.find('.nom').text()+'</p><p class="prix">'+item.find('.prix').text()+'</p></div>');
                        }
                    }else {
                        $("#produits").append('<div class="produit"><p class="quantite">1</p><p class="nom">'+item.find('.nom').text()+'</p><p class="prix">'+item.find('.prix').text()+'</p></div>');
                    }

                    $("#produits .produit").each(function() {
                        total += parseFloat($(this).find('.prix').text());
                    });

                    $("#total>p").text(total+" €");

                });

                $("#total button").on("click", function() {
                    $("#produits").html('<div class="titre"><p class="quantite">quantité</p><p class="nom">nom</p><p class="prix">prix</p></div>');
                    $("#total>p").text("Total €");
                });

            });

        </script>
    </body>
</html>