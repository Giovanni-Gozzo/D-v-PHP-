<?php
$a=0;
$b=0;
$v=0;
while($a!="."){
    $a=fgetc(STDIN);
    if ($v==1) {
        if ($a=="e"){
            $b+=1;
        }
        $v=0;
    }
    if ($a=="l"){
        $v=1;
    }
    if ($a==" "){
        $v=0;
    }
}
echo("***$b***");
