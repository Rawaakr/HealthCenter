<?php
class departement{
private $titre;
private $description;
                

function __construct($titre,$description){
$this->titre = $titre;
$this->description = $description;

}

public function ajouter(){ 

include('../includes/connect_db.php');
    
	
    
		$req = $bdd->exec("INSERT INTO departements(`titre`,`description`) VALUES ('$this->titre','$this->description')");
		
		echo'oui';
               
   

} 
public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM departements WHERE id=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}
public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec("UPDATE departements SET `titre`='$this->titre',`description`='$this->description' WHERE id=$id");
				
        
        echo'oui';
        //return TRUE;
 			}}
?>