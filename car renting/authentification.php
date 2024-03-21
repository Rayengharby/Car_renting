<?php
session_start();
include 'dbconnect.php';

$error=[];

if (isset($_POST['submit'])) {
    extract($_POST);
    $sql = "SELECT * FROM utulisateur WHERE email=:email";
    $query = $bd->prepare($sql);
    $query->execute(['email' => $email]);
    $user = $query->fetch();

    if ($user == false) {
        $error['error']="User Not Found";
        goto emplacement;
    } else {
       // if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['avatar'] = $user['avatar'];
            header('location: ./book.php');
            exit;
       /* } else {
            goto emplacement;
        }*/
    }
}

emplacement: "index.phtml";
include 'authentification.phtml';
?>