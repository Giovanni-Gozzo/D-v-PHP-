<?php
$a=0;
$b=0;
while($a!="."){
    $a=fgetc(STDIN);
    if($a==" "){
        $b=$b+1;
    }
}
$b=$b+1;
echo("***$b***");
