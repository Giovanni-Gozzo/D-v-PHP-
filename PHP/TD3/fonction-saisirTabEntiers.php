<?php
function saisirTabentiers(int $taille): array{
    $tab=[];
    for($i=0;$i<$taille;++$i){
        $tab[$i]=readline("saisie un entier");
    }
    return $tab;
}
///*
//Donnée: un entier naturel > 0
//Résulats: renvoie un Tableau de longueur donnée en argument et rempli avec les
//          donnée saisie par l'utilisateur a la suite.
///*