<?php
require_once('../model/medecin.class.php');

$medecin = new medecin($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['dateNAiss'],$_POST['role'],$_POST['departement'],$_POST['login'],$_POST['mdp']);
$medecin->supprimer();

header("location:../liste-medecins.php?resultat=ouisup");
//exit();
?>