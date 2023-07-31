<?php
class CnxPatient{
private $email;
private $mdp;

        
function __construct($email,$mdp){
$this->email = $email;
$this->mdp =$mdp;


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM user WHERE email = '$this->email' AND mdp = '$this->mdp'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id'] = $resultat['id'];
       $_SESSION['nom'] = $resultat['nom'];
       $_SESSION['prenom'] = $resultat['prenom'];
       $_SESSION['login'] = $resultat['login'];
        $_SESSION['email'] = $resultat['email'];
        $_SESSION['dateNaiss'] = $resultat['dateNaiss'];
        $_SESSION['telephone'] = $resultat['telephone'];
        $_SESSION['nomMedecin'] = $resultat['nomMedecin'];
        $_SESSION['departement'] = $resultat['departement'];
        $_SESSION['role'] = $resultat['role'];
        $_SESSION['mdp'] = $resultat['mdp'];
	header('location:../contact.php');


} 

}
}


$salarie = new CnxPatient($_POST['email'],$_POST['mdp']);


?>