<?php
$a=readline("entrez le a");
$b=readline("entrez le b");
$c=readline("entrez le c");
$r1=0;
$r2=0;
echo("L'équation est donc $a*x^2+$b*x+c\n");
$pol=$b*$b-(4*$a*$c);
echo("le discriminant est de $pol\n");
if ($pol<0){
    echo("il n'y a donc pas de solutions pour cette équation");
}
elseif($pol==0){
    $r1=-$b/(2*$a);
    echo("il y a donc une seule solution pour l'équation est c'est $r1");
}
else{
    $r1=(-$b-sqrt($pol))/(2*$a);
    $r2=(-$b+sqrt($pol))/(2*$a);
    echo("il y a donc 2 solutions pour l'équation est c'est $r1 et $r2");
}
