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
            <div id="item">
                
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

                $("")

            });

        </script>
    </body>
</html>