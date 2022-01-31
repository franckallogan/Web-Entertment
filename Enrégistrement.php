<?php

$Nomduserveur = "localhost";
$NomUtilisateur = "root";
$MdpUtilisateur = "";
$Basededonne = "mabasedd";

$Nom = $_POST['textNOM'];
$Email = $_POST['textEmail'];
$Mdp = $_POST['TextMdp'];
$Mdprepeter = $_POST['Mdprepete'];

if ($Mdp === $Mdprepeter) {
    //Ouverture de la connexion
    try {
        $connection = new mysqli($Nomduserveur, $NomUtilisateur, $MdpUtilisateur, $Basededonne );

    } catch (\Throwable $th) {
        echo "vous n'avez pas pus vous connectez". 
        
    
     //Tentative d'insertion
    T_TRY;
        $requette = "INSERT INTO utilisateur(id,Nom,Email,Mdp)";

        $requette2= "VALUES(NULL, '$Nom', '$Email','$Mdp', '$Mdprepeter')";
        
       if ($connection->query($requette.$requette2) === true) {
           echo "Nouveau utilisateur créer";
       }
       else echo "Echec d'insertion !";

    } catch (\Throwable $th) {
    
    }
    $connection->close();
    
}
else echo "Mot de pass nom identique";
    

?>