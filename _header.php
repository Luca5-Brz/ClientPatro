<header id="header">
     <div id="divLogo">
     <a href="infos.php"><img src="img/logo.png" alt="Logo Patro" id="logo"></a>
     </div>
     <h1 id="titre"><a href="infos.php">Patro d'Ollignies</a></h1>
     <a href="session_stop.php" id="utilisateur">
          <?php
               include("session.php");

               if (isset($_SESSION['IsAllowed']) && $_SESSION["IsAllowed"]==true) {
                    
                    $Prenom=$_SESSION["prenom"];
                    $Nom=$_SESSION["nom"];
                    echo $Prenom.' '.$Nom;
               }else {
                    header('Location: index.php');
               }
          ?>
     </a>
     <nav id="navBar">
          <a id="infos" href="infos.php">Infos cartes</a>
          <a id="menu" href="menu.php">Menu</a>
     </nav>
</header>