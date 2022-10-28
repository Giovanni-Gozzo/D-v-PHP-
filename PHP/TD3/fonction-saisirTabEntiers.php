<?php
function saisirTabentiers(int$taille):array{
	$tab=[];
	for($i=0;$i<$taille;++$i){
        $tab[$i]=readline("saisie un entier");
	}
	return $tab;
}
///*
//Donnée: un entier naturel
//Résulats: renvoie un entier naturel qui correspond aux nombres de triangles rectangle ayant un périmetre plus
//          petit que l'entier donnée et ayant des cotés entiers également.
///*