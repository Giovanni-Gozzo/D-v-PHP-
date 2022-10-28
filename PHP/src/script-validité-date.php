<?php
$j=readline("ecris un jour");
$m=readline("ecris un mois");
$a=readline("ecris une année");
$d=0;
$vj=0;
if($a%400==0){
	$b="oui";
}
elseif($a%4==0 and $a%100!=0){
	$b="oui";
}
else{
	$b="non";
}
if($a>0){
	$d=$d+1;
}
if($m>0 and $m<13){
	$d=$d+1;
}
if($j<=31 and $m==1 or $m==3 or $m==5 or $m==7 or $m==8 or $m==10 or $m==12){
	$d=$d+1;
}
elseif($j<=30 and $m==6 or $m==4 or $m==9 or $m==11){
	$d=$d+1;
}
elseif($j<=29 and $m==2 and $b=="oui"){
	$d=$d+1;
}
elseif($j<=28 and $m==2){
	$d=$d+1;
}
if($d==3){
	v="vrai";
}
else{
	v="faux";
}
if(v=="vrai"){
	while(j!=1 and m!=1){
		while(v="vrai"){
			j=j-1
		}
	}
}
else{
	echo("entre une date qui existe");
}
?>
