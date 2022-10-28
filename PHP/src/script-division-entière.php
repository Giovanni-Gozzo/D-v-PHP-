<?php
$a=readline("entrez un nombre");
$b=readline("donnez moi un diviseur");
$c=$a;
while ($c>$b){
    $c=$c-$b;
} 
$e=($a-$c)/$b;
echo("$a = $b x $e + $c");
?>
