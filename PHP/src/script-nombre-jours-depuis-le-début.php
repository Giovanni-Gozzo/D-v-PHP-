<?php
$nb=0;
$a=readline("donne moi une année");
$m=readline("donne moi un mois");
$j=readline("donne moi un jour");
$jv=$j;
if($a%400==0){
	$b="oui";
}
elseif($a%4==0 and $a%100!=0){
	$b="oui";
}
else{
	echo$b="non";
}
while($j!=1 or $m!=1){
	while($j!=1){
		--$j;
		++$nb;
	}
	--$m;
	if($m==1 or $m==3 or $m==5 or $m==7 or $m==8 or $m==10 or $m==12){
		++$nb;
		$j=31;
	}
	elseif($m==6 or $m==4 or $m==9 or $m==11){
		++$nb;
		$j=30;
	}
	elseif($m==2 and $b=="oui"){
		$j=29;
		++$nb;
	}
	elseif($m==2 and $b=="non"){
		++$nb;
		$j=28;
	}
	else{
		$m=1;
	}
}
++$nb;
echo("il y a eu $nb jours passé depuis le début de l'année");
?>
 


	
	
