<?php
$b=0;
$c=0;
$a=readline("donne moi une année");
if($a%400==0){
    echo("année bissextile");
}
elseif($a%4==0 and $a%100!=0){
    echo("année bissextile");
}
else{
    echo("année non bissextile");
}

