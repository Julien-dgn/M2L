<?php
	$recherche= $base->query('SELECT nom_produit, detail_produit, image_produit, prix FROM produit ORDER BY nom_produit, detail_produit ASC LIMIT 3 ;');
?>