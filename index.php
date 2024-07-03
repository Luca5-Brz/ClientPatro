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

                <form id="form-login" method="POST"> <!-- Action= page vers laquelle le formulaire redirige -->
                    <?php
                        include '_bd.php';

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $email=$_POST["email"];
                            $password=$_POST["pwd"];
                            $email_db="";
                            $password_db="";
                            $prenom="";
                            $nom="";
                            $access="";

                            if (empty($email)) {
                                echo"L'adresse email est obligatoire.";
                            }
                            else {
                                try {
                                    $sql="SELECT * FROM compte WHERE compte.login = '$email'";
                                        
                                    $stmt = $bd->prepare($sql);
                                    $stmt->execute();
    
                                    while($row = $stmt->fetch())    #Recuperation des infos depuis la DB
                                    {
                                        $email_db=$row["login"];
                                        $password_db=$row["password"];
                                        $prenom=$row["prenom"];
                                        $nom=$row["nom"];
                                        $access=$row["access"];
                                    }

                                    if($password == $password_db){
                                        include("sessions.php");
                                        $_SESSION["IsAllowed"]=true;
                                        $_SESSION["prenom"]=$prenom;
                                        $_SESSION["nom"]=$nom;
                                        $_SESSION["access"]=$access;
                                        header('Location: infos.php');                                        
                                    }
                                    else {
                                        echo "<p>Mot de passe ou email erroné</p>";
                                    }

                                } 
                                
                                catch (Exception $e) 
                                {
                                    var_dump($e->getMessage());
                                }
                            }

                        }

                    ?>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email" required>
                    </div>
                    <div class="mb-3" id="div-passwd">
                        <label for="pwd" class="form-label">Mot de passe:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Entrez votre mot de passe" name="pwd" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>

            <script>
            </script>

       </div>
    </body>
</html>