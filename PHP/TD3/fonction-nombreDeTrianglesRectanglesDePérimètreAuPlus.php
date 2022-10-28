<?php
function nombreDeTrianglesRectanglesDePérimètreAuPlus(int $n):int{
	$nb=0;
	for($a=1;$a<=($n-2);++$a){
	    for($b=$a;$b<=($n-2);++$b){
	        for($c=1;$c<($n-2);++$c){
	            if ($a*$a+$b*$b==$c*$c and $a+$b+$c<=$n){
	                $nb+=1;
	                echo("$a+$b=$c\n");
	            }
        	}
    	}
	}
	return $nb;
}
///*
//Donnée: un entier naturel
//Résulats: renvoie un entier naturel qui correspond aux nombres de triangles rectangle ayant un périmetre plus
//          petit que l'entier donnée et ayant des cotés entiers également.
///*

