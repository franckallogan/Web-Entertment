<?php
         $Nom =  $_POST['textnom'];
		$Mdp = $_POST['Mdp'];

		if ($Nom =="admin" && $Mdp == "admin") {
			header('Location: luna2.html');
		}	
		else{
		echo "vous n'etes pas connectez à votre compte";
		}




?>