<?php
function pyramideSimple(int $nb,string $car):void{
    $c=" ";
    $j=1;
    $x=$nb-1;
    $y=1;
    for($i=0;$i<$nb;++$i){
        for($nbv=0;$nbv<$x;++$nbv){
            echo($c);
        }
        for($j=1;$j<=$y;++$j){
            echo($car);
        }
        for($nbv=0;$nbv<$x;++$nbv){
            echo($c);
        }
        --$x;
        $y+=2;
        echo("\n");
    }
}
///*
//Donnée: un entier naturel ainsi qu'un caractère
//Résulats: renvoie rien mais affiche une pyramide de la taille de l'entier saisie,
//          la pyramide est construite avec le caractère donné en argument
///*