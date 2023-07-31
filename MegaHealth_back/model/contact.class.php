<?php
class contact{
private $nom;
private $prenom;
private $email;
private $telephone;  
private $message;       

function __construct($nom,$prenom,$email,$telephone,$message){
$this->nom = $nom;
$this->prenom = $prenom;
$this->email = $email;
$this->telephone = $telephone;
$this->message = $message;

}


public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec("INSERT INTO contact(`nom`,`prenom`,`email`,`telephone`,`message`) VALUES ('$this->nom','$this->prenom','$this->email','$this->telephone','$this->message')");
		
		echo'oui';
               
   

} 
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM contact WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE contact SET `nom`='$this->nom',`prenom`='$this->prenom',`email`='$this->email',`telephone`='$this->telephone',`message`='$this->message' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}}
?>