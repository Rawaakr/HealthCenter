<?php 

require_once('../model/CnxPatient.class.php');
$Patient = new CnxPatient($_POST['email'],$_POST['mdp']);
$Patient->verifier();
//header('location:../home1.php');


?>
