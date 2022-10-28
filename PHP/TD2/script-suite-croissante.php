<?php
$b=readline("entrez un nombre");
$c=("vrai");
$x=0;
for($i=0;$i<$b;++$i){
	$a=readline("entrez un nombre");
	if ($x>$a){
		$c=("faux");
	}
	else{
		$x=$a;
	}
}
echo("$c");
?>
