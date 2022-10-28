<?php
$x=0;
$y=0;
$n=readline("donne un nombre entier");
echo("tu vas devoir saisir $n entier.\n");
for($i=1;$i<=$n;$i=$i+1){
    $y=readline("saisie un entier: ");
    $x=$x+$y;
}
echo("la somme des entiers est $x");
