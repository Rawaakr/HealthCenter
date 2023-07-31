<?php
require_once('../model/departement.class.php');

$departement = new departement($_POST['titre'],$_POST['description']);
$departement->modifier();

header("location:../liste-departements.php?resultat=ouimodif");
//exit();
?>