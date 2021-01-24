<?php
if($_POST){
 
    
    require 'db_conn.php';
 
    try{
     
        
        $query = "INSERT INTO dbnaam SET id=ph_id, klusnaam= ph_klusnaam, klantnaam=ph_klantnaam, ";
 
        
        $stmt = $con->prepare($query);
 
        
        $name=htmlspecialchars(strip_tags($_POST['id']));
        $description=htmlspecialchars(strip_tags($_POST['klusnaam']));
        $price=htmlspecialchars(strip_tags($_POST['klantnaam']));
 
    
        $stmt->bindParam('ph_id', $id);
        $stmt->bindParam('ph_klusnaam', $ph_klusnaam);
        $stmt->bindParam('ph_klantnaam', $klantnaam);
         
         
        
        $stmt->execute();
        header('location: home.php');
         
    }
     
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>