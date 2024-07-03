<?php

include '_bd.php' ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Vérifier l'action
    if ($_POST['type'] === "0") {
        // Exécuter une requête SQL
        $result=$bd->prepare('SELECT produit.nom_produit, prix.prix FROM produit
                              JOIN prix on prix.id_prix = produit.id_prix
                              WHERE type= :type ;');
        $result->bindValue(':type', $_POST['type']);
        $result->execute();
        
    }
    if ($_POST['type'] === "1") {
        // Exécuter une requête SQL
        $result=$bd->prepare('SELECT produit.nom_produit, prix.prix FROM produit
                              JOIN prix on prix.id_prix = produit.id_prix
                              WHERE type= :type ;');
        $result->bindValue(':type', $_POST['type']);
        $result->execute();
        
    }
    if ($_POST['type'] === "2") {
        // Exécuter une requête SQL
        $result=$bd->prepare('SELECT produit.nom_produit, prix.prix FROM produit
                              JOIN prix on prix.id_prix = produit.id_prix
                              WHERE type= :type ;');
        $result->bindValue(':type', $_POST['type']);
        $result->execute();

    }

    while($data = $result->fetch()) {
        echo '<p>', $data['nom_produit'],'  ',$data['prix'],'</p>';
    }
}
?>