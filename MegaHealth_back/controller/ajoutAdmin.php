<?php
require_once('../model/admin.class.php');

$admin = new admin($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['dateNaiss'],$_POST['role'],$_POST['login'],$_POST['mdp']);
$admin->ajouter();

header("location:../liste-admin.php?resultat=oui");
exit();
?>