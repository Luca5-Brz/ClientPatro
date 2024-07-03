<?php

include '_bd.php' ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifier l'action
    if ($_POST['type'] === "0") {
        // Exécuter une requête SQL
        $result=$bd->prepare('SELECT produit.nom_produit, prix.prix FROM produit
                              JOIN prix on prix.id_prix = produit.id_prix
                              WHERE type= :type AND actif=1 ;');
        $result->bindValue(':type', $_POST['type']);
        $result->execute();
        
    }
    if ($_POST['type'] === "1") {
        // Exécuter une requête SQL
        $result=$bd->prepare('SELECT produit.nom_produit, prix.prix FROM produit
                              JOIN prix on prix.id_prix = produit.id_prix
                              WHERE type= :type AND actif=1 ;');
        $result->bindValue(':type', $_POST['type']);
        $result->execute();
        
    }
    if ($_POST['type'] === "2") {
        // Exécuter une requête SQL
        $result=$bd->prepare('SELECT produit.nom_produit, prix.prix FROM produit
                              JOIN prix on prix.id_prix = produit.id_prix
                              WHERE type= :type AND actif=1 ;');
        $result->bindValue(':type', $_POST['type']);
        $result->execute();

    }

    while($data = $result->fetch()) {
        echo   '<div class="item claire">
                    <p class="nom">', $data['nom_produit'],' </p>
                    <p class="prix">',$data['prix']*1,' €</p>
                </div>';
    }
}
?>