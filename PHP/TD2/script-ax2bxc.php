<?php
$a=readline("entrez le a");
$b=readline("entrez le b");
$c=readline("entrez le c");
$r1=0;
$r2=0;
$pol=$b*$b-(4*$a*$c);
if ($pol<0){
    echo("pas de solutions");
}
elseif($pol==0){
    $r1=-$b/(2*$a);
    echo("x=$r1");
}
else{
    $r1=(-$b-sqrt($pol))/(2*$a);
    $r2=(-$b+sqrt($pol))/(2*$a);
    echo("x1=$r1 et x2=$r2");
}
?>
