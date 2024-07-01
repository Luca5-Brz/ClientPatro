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
       <div id="div-body">

            <div id="formDiv">
                <h2 id="h2-login">Se connecter</h2>

                <form id="form-login">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email" required>
                    </div>
                    <div class="mb-3" id="div-passwd">
                        <label for="pwd" class="form-label">Mot de passe:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd" required>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Se souvenir de moi
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>

            <script>
            </script>

       </div>
    </body>
</html>