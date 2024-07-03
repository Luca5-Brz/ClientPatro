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
                        <p>Boissons</p>
                    </div>
                    <div id="boutton_bouffe" class="foncee">
                        <p>Bouffes</p>
                    </div>
                    <div id="boutton_grand" class="foncee">
                        <p>Grands</p>
                    </div>
                </div>
            </div>
            <div id="items">
                <div class="item claire">
                    <p>Coca </p>
                    <p>1.50</>
                </div>
                <div class="item claire">
                    <p>Biére </p>
                    <p>3.00</>
                </div>
            </div>
            <div id="total">
                
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

            });

        </script>
    </body>
</html>