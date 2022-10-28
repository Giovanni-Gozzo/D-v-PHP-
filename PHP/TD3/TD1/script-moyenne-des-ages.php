<?php
$x=0;
$a=0;
$n=readline("donne un nombre de personne");
while($n<=0){
    $n=readline("donne un nombre positif");
}
for($i=1;$i<=$n;++$i){
    $a=readline("donne l'age de la personne n°$i");
    while($a<=0){
        $a=readline("donne un nombre positif");
    }
    $x=$x+$a;
}
$y=$x/$n;
echo("la moyenne d'age des personnes est : $y");
