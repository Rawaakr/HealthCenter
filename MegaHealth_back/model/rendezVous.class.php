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
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM rendezvous WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE rendezvous SET `nom`='$this->nom',`prenom`='$this->prenom',`email`='$this->email',`telephone`='$this->telephone',`date`='$this->date',`heure`='$this->heure' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}}

?>