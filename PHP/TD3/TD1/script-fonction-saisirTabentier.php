<?php
function saisirTabentiers(int$taille):array{
	$tab=[];
	for($i=0;$i<$taille;++$i){
        $tab[$i]=readline("saisie un entier");
	}
	return $tab;
}
