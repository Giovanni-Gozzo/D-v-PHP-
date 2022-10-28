<?php
$x=1;
$n=readline("donne un nombre correspondant a n");
while ($n<=0){
    $n=readline("donne un nombre positif");
}
$y=1;
if($n==$y){
    echo("U$n=1");
}
else{
    for($i=2;$i<=$n;$i=$i+1){
        $x=$y+$i;
        $y=$x;
    }
    echo("u$n=$x");
}
?>


