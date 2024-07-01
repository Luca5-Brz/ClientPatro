<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link href="Bootstrap/bootstrap.min.css" rel="stylesheet">
        <script src="Bootstrap/bootstrap.bundle.min.js"></script>

        <script src="js/jquery-3.6.0.min.js"></script>

        <link href="DataTables/jquery.dataTables.min.css" rel="stylesheet">
        <script src="DataTables/jquery.dataTables.min.js"></script>

        <link rel="stylesheet" href="style.css">
        <title>Infos Client du Patro Ollignies</title>
    </head>

    <body>
        <?php
            include ("header.php")
        ?>

        <div id="content">
            <div id="divInfosClients">

            </div>

            <div id="divInfosCartes">

            </div>
        </div>

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