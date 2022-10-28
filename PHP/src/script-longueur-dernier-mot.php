<?php
$a=0;
$b=0;
$c=0;
while($a!="."){
    $a=fgetc(STDIN);
    ++$b;
    if($a==" "){
        $c=$b;
    }
}
++$c;
$b=$b-$c;
echo("***$b***");
