<?php
require_once('../model/contact.class.php');

$contact = new contact($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['telephone'],$_POST['message']);
$contact->modifier();

header("location:../liste-contacts.php?resultat=ouimodif");
//exit();
?>