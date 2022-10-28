<?php
$a=readline("saisie un entier");
$y=1;
$x=0;
While($a!=0){
    $x=$x+$a;
    $y=$y+1;
    $a=readline("saisie un entier \n");
}
echo("il y a eu $y essai et l'addition de tous ces nombres est $x");