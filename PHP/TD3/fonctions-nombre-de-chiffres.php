<?php
function nbDeChiffresDe(int$n):int{
	$i=0;
	if($n==0){
        $i=1;
	}
	while($n>=1){
        $i++;
        $n/=10;
	}

	return $i;
}
///*
//Donnée: un entier naturel
//Résulats: renvoie un entier naturel donnant le nombre de
//          chiffres présent dans le nombre donnée en argument.
///*

function nbDeChiffresDuCarréDe(int$n):int{
	$i=0;
	$n=$n*$n;
	while($n>=1){
        $i++;
        $n/=10;
	}

	return $i;
}

///*
//Donnée: un entier naturel
//Résulats: renvoie un entier naturel donnant le nombre de
//          chiffres présent dans le nombre donnée en argument au carré.
///*
