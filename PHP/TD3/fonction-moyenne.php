<?php
function moyenne(array $t): float{
    $moy = 0;
    $i = 0;
    foreach ($t as $n) {
        $moy = $moy + $n;
        ++$i;
    }
    $moy = $moy / $i;
    return $moy;
}
///*
//Donnée: un tableau d'entier non vide
//Résulats: renvoie un entier qui correspond a la moyenne des entiers se trouvant dans le tableau.
///*
