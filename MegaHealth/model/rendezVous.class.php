<?php
class rendezVous{
private $nom;
private $prenom;
private $email;
private $telephone;
private $date;
private $heure;



                

function __construct($nom,$prenom,$email ,$telephone,$date, $heure){
$this->nom = $nom;
$this->prenom = $prenom;
$this->email = $email;
$this->telephone = $telephone;
$this->date = $date;
$this->heure = $heure;

}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec("INSERT INTO rendezvous(`nom`,`prenom`,`email`,`telephone`,`date`,`heure`) VALUES ('$this->nom','$this->prenom','$this->email','$this->telephone','$this->date','$this->heure')");
		
		echo'oui';
               
   

} 
}

?>