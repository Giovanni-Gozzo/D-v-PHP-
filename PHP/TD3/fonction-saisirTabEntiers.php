<?php
//ma fonction prend comme variable un entier et retourne un tableau
//il permet de creer un tableau de la taille que l'on souhaite

function saisirTabentiers(int$taille):array{
	$tab=[];
	for($i=0;$i<$taille;++$i){
        $tab[$i]=readline("saisie un entier");
	}
	return $tab;
}
