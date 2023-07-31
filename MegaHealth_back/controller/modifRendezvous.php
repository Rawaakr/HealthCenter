<?php
require_once('../model/rendezVous.class.php');

$rendezVous = new rendezVous($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['date'],$_POST['heure']);
$rendezVous->modifier();

header("location:../liste-rendezvous.php?resultat=ouimodif");
//exit();
?>