<?php
$b=0;
$c=0;
$a=readline("donne moi un chiffre");
while($b<$a){
    ++$c;
    $b=$b+$c;
}
$d=$b-$c;
if($a-$d<=$b-$a){
    echo("###$d###");
}
else{
    echo("###$b###");
}
