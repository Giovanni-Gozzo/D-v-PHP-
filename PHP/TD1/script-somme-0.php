<?php
$x=readline("entre un nombre entier");
$somme=$x;
$y=0;
while($x!=0){
    $x=readline("entre un nombre entier");
    $somme+=$x;
    $y++;
 }
echo("longueur=$y et somme=$somme");
