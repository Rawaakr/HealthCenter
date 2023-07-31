<?php
class patient{
private $nom;
private $prenom;
private $email;
private $adresse;
private $telephone;
private $dateNaiss;
private $role;
private $departement;
private $nomMedecin;
private $login;
private $mdp;



                

function __construct($nom,$prenom,$email,$adresse ,$telephone,$dateNaiss, $role,$departement,$nomMedecin,$login, $mdp){
$this->nom = $nom;
$this->prenom = $prenom;
$this->email = $email;
$this->adresse = $adresse;
$this->telephone = $telephone;
$this->dateNaiss = $dateNaiss;
$this->role = $role;
$this->departement = $departement;
$this->nomMedecin = $nomMedecin;
$this->login = $login;
$this->mdp = $mdp;




}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec("INSERT INTO user(`nom`,`prenom`,`email`,`adresse`,`telephone`,`dateNaiss`,`role`,`departement`,`nomMedecin`,`login`,`mdp`) VALUES ('$this->nom','$this->prenom','$this->email','$this->adresse','$this->telephone','$this->dateNaiss','$this->role','$this->departement','$this->nomMedecin','$this->login','$this->mdp')");
		
		echo'oui';
               
   

} 
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM user WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE user SET `nom`='$this->nom',`prenom`='$this->prenom',`email`='$this->email',`adresse`='$this->adresse',`telephone`='$this->telephone',`dateNaiss`='$this->dateNaiss',`role`='$this->role',`departement`='$this->departement',`nomMedecin`='$this->nomMedecin',`login`='$this->login',`mdp`='$this->mdp' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}}

?>