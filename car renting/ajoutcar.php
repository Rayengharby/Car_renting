<?php
include "dbconnect.php";

include "./send.php";
use PHPMailer\PHPMailer\PHPMailer;

if (!empty($_POST)) {
    $model = $_POST['model'];
    $marque = $_POST['marque'];
    $couleur = $_POST['couleur'];
    $puissance = $_POST['puissance'];
    $nb_place = $_POST['nb_place'];
    $nb_porte = $_POST['nb_porte'];
    $poids = $_POST['poids'];
    $cylindre = $_POST['cylindre'];
    $prix = $_POST['prix'];
    $image = $_POST['image'];

    // Prépare la requête SQL
    $sql = "INSERT INTO voiture (model, marque, couleur, puissance, nb_place, nb_porte, poids, cylindre, prix,image)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)";

    // Crée une instance de la connexion à la base de données
    $query = $bd->prepare($sql);

    // Exécute la requête avec les valeurs des paramètres
    $query->execute([$model, $marque, $couleur, $puissance, $nb_place, $nb_porte, $poids, $cylindre, $prix, $image]);
    sendmail("Renting Car","rayen14865@gmail.com","Added","new car added $marque");
    header('location:book.php');
    exit();
}

include "ajoutcar.phtml";
?>
