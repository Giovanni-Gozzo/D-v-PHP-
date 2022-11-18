<?php
$finDeLaSuiteAtteinte=0;
$x=0;
$nb=readline();
$i=0;
$suiteCroissante=true;
while ($suiteCroissante and $i<$nb) {
	$i+=1;
	$y=readline();
	if($y<$x){
		$suiteCroissante=false;
	}
	$x=$y;
}
if ($suiteCroissante) {
	echo 'vrai';
} else {
	echo 'faux';
}