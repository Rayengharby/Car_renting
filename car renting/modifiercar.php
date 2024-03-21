<?php
    include "dbconnect.php";

    $id=array_key_exists("imatriculation",$_GET) ? $_GET['imatriculation'] : $_POST['imatriculation'];

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
        $id = $_POST['imatriculation'];
    
        // on fait la requete update
        $sql = "UPDATE voiture 
                SET model ='$model',
                    marque ='$marque',
                    couleur='$couleur',
                    puissance='$puissance',
                    nb_place='$nb_place',
                    nb_porte='$nb_porte',
                    poids='$poids',
                    cylindre='$cylindre',
                    prix='$prix'
                WHERE imatriculation='$id'";  
        $query = $bd->prepare($sql);
        $query->execute();
        header('location:./book.php');
    }
    
   $query = $bd->prepare('SELECT * FROM voiture WHERE imatriculation =?');
   $query->execute([$id]);
   $cls = $query->fetch();

   include "modifiercar.phtml";
?>
