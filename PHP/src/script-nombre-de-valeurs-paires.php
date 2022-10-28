<?php
$a=1;
$b=0;
$c=0;
while($a!=0){
    $a=readline("entrez un nombre si 0 est saisie alors le programme s'arrete");  
    if($a%2==0){
        ++$b;
    }
    ++$c;
}
echo("il y a $b nombre paire sur les $c nombres entrez");
