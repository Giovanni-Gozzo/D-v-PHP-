<?php
$b=readline("entrez un nombre");
$c=("vrai");
$x=0;
$i=0;
while($i<$b){
	$i++;
	$a=readline("entrez un nombre");
	if ($x>$a){
		$c=("faux");
	}
	else{
		$x=$a;
	}
}
echo("$c\n");
?>
