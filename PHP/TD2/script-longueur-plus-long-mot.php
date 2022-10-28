<?php
$a=0;
$b=0;
$c=0;
$d=0;
while($a!="."){
    $a=fgetc(STDIN);
    ++$b;
    if($a==" "or $a=="."){
        $c=$b-$c;
        if($c>$d){
            $d=$c;
        }
        $c=$b;
    }
}
$d=$d-1;
echo("***$d***");
