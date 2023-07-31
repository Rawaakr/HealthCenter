<?php
require_once('../model/service.class.php');
$service = new service($_POST['titre'],$_POST['description']);
$service->supprimer();

header("location:../liste-services.php?resultat=ouisup");
//exit();
?>