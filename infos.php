<?php 
	include '_bd.php' ;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Infos Client du Patro Ollignies</title>
    </head>

    <body>
        <?php
            include ("_header.php")
        ?>
        <main id="content">
            <div id="divInfosClients" class="claire">
                <div class="divClient" id="prenom">
                    <label for="Prenom" class="soulignee">Prenom :</label>
                    <input type="text" readonly value=<?php echo$_SESSION["prenom"] ?>>
                </div>

                <div class="divClient" id="nom">
                <label for="Nom" class="soulignee">Nom :</label>
                <input type="text" readonly value=<?php echo$_SESSION["nom"] ?>>
                </div>

                <div class="divClient" id="mail">
                <label for="Mail" class="soulignee">Email :</label>
                <input type="text" readonly value=<?php echo$_SESSION["mail"] ?>>
                </div>

                <div class="divClient" id="modifMdp" style="Display:none">Changer mes Informations</div>

            </div>

            <div id="divInfosCartes" class="claire">
                <div id="Cartes" class="foncee">
                    <p>Mes Cartes</p>
                </div>
                <div id="HeaderTab">
                    <p>N°</p>
                    <p> Date D'activation</p>
                    <p>Montant</p>
                    <p>Bloquée</p>
                </div>
            </div>
        </main>
        <footer>
            
        </footer>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="DataTables/jquery.dataTables.min.js"></script>
        <script src="Bootstrap/bootstrap.bundle.min.js"></script>
        <script src="js/bouton.js"></script>
        <script>
            $(document).ready(function(){

            var headerHeight = $('#header').outerHeight(true);
            var htmlHeight = $('html').outerHeight(true);

            var contentHeight = htmlHeight - headerHeight;

            $('#content').outerHeight(contentHeight); //Limite la taille du div #content pour qu'il fasse toute la page sans déborder
            
            $('#divInfosCartes').outerHeight($('#divInfosClients').outerHeight(true)); //Je mets la même hauteur au 2 div en fonction du premier.

            });
        </script>
    </body>
</html>