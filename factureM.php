<?php 
    function getFacture($conn){
        try{
            $query = 'SELECT * FROM facture';
            $profil = $conn->prepare ($query);
            $profil->execute();
            $factures = $profil->fetchAll();
            return $factures;
        }catch(PDOException $e){
            $_SESSION['etatConnect'] = false;
            $message = $e->getMessage();
            return $message; 
        }
    }
?>

