<?php
function afficherTabEntiers(array $t): void{
    $x=0;
    echo("[");
    foreach($t as $n){
        if($x<(count($t)-1)){
            echo("$n,");}
        else{
            echo("$n]");
        }
        $x+=1;
    }
}
///*
//Donnée: un tableau
//Résulats: renvoie rien mais affiche le tableau en entier.
///*

