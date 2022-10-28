<?php
function moyenne(array $t): float{
    $moy=0;
    $i=0;
    foreach($t as $n){
        $moy=$moy+$n;
        ++$i;
    }
    $moy=$moy/$i;
    return $moy;
}
