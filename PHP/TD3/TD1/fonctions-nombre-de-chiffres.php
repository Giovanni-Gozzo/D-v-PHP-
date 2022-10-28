<?php
function nbDeChiffresDe(int$n):int{
	$i=0;
	if($n==0){
        $i=1;
	}
	while($n>=1){
        $i++;
        $n/=10;
	}

	return $i;
}
function nbDeChiffresDuCarréDe(int$n):int{
	$i=0;
	$n=$n*$n;
	while($n>=1){
        $i++;
        $n/=10;
	}

	return $i;
}
