<?php 
include "dbconnect.php";
//requette
$query = $bd->prepare ('DELETE FROM voiture where imatriculation=?');
$query->execute([$_GET['imatriculation']]);
header('location: book.php');
exit();
?>