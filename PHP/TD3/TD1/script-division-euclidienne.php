<?php
$n=readline("saisie un entier");
while($n<=0){
    $n=readline("saisie un entier positif");
}
$p=readline("saisie un entier");
while($p<=0){
    $p=readline("saisie un entier positif");
}
$y=0;
while($n-$p>=0){
    $y=$y+1;
    $n=$n-$p;
}
echo("il reste $n");
echo("le quotient est $y");










?>
