<?php
function pyramideSimple(int $a,string $m): void {
    $c=" ";
    $x=$a-1;
    $y=1;
    for($i=0;$i<$a;++$i){
        for($nbv=0;$nbv<$x;++$nbv){
            echo($c);
        }
        for($j=1;$j<=$y;++$j){
            echo($m);
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