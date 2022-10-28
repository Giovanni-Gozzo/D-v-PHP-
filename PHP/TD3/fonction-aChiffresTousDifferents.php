<?php
function aChiffresTousDifferents(int$n):bool{
    $tab=[0,0,0,0,0,0,0,0,0,0];
    $y=true;
    while($n>=1 and $y=="true"){
        $x=$n%10;
        $n=$n-$x;
        $n=$n/10;
        $tab[$x]++;
        if($tab[$x]>1){
            $y=false;
        }
    }
    return $y;
}
///*
//Donnée:un entier naturel
//Résulats:renvoie un boolean qui sera vrai si touts les chiffres de l'entier donné sont
//         différents sinon il renverra faux.
///*
