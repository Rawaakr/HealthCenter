<?php
require_once('../model/patient.class.php');

$patient = new patient($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['telephone'],$_POST['dateNAiss'],$_POST['role'],$_POST['departement'],$_POST['nomMedecin'],$_POST['login'],$_POST['mdp']);
$patient->supprimer();

header("location:../liste-patients.php?resultat=ouisup");
//exit();
?>