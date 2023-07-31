<?php
require_once('../model/admin.class.php');

$admin = new admin($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['dateNAiss'],$_POST['role'],$_POST['login'],$_POST['mdp']);
$admin->supprimer();

header("location:../liste-admin.php?resultat=ouisup");
//exit();
?>