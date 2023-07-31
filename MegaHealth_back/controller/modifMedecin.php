<?php
require_once('../model/medecin.class.php');

$medecin = new medecin($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['dateNaiss'],$_POST['role'],$_POST['departement'],$_POST['login'],$_POST['mdp']);
$medecin->modifier();

header("location:../liste-medecins.php?resultat=ouimodif");
//exit();
?>