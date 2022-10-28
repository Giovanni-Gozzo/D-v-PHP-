<?php
$x=1;
$y=1;
$z=1;
$n=readline("donne un nombre correspondant a n");
$y=1;
 for($i=3;$i<=$n;$i=$i+1){
     $x=$y+$z;
     $y=$z;
     $z=$x;
 }
 echo("###$x###");
