<?php

	try{
			$base = new PDO('mysql:host=localhost;dbname=maison_des_ligues','root','');
		}

	catch (Exception $e)
		{
			die('erreur: ' .$e->getMessage());
		}
?>