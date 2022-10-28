<?php
$n=readline("donne un nombre trés petit");
$x=1;
$y=1;
$z=1;
while($z>$n){
    $y=$y+2;
    $x=$x-1/$y;
    $y=$y+2;
    $x=$x+1/$y;
    $z=1/$y;
}
echo($x)
?>