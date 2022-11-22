<?php
function fréquenceChiffres(int $n): array{
    $tab=[0,0,0,0,0,0,0,0,0,0];
    while($n>=1){
        $x=$n%10;
        $n=$n/10;
        $tab[$x]+=1;
    }
    return$tab;
}
///*
//Donnée:un entier naturel
//Résulats:renvoie un tableau de longueur 10 constitué d'entier naturel ou nul qui correspondra
//         a la fréquence d'un chiffre dans l'entier donnée.Le premier nombre du tableau correspondra
//         au nombre de zeros le 2e nombre au nombre de 1 ... jusque 9.
///*