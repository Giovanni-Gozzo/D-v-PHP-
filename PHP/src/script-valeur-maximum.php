<?php
$a=readline("entrez un nombre meme négatif");
$b=$a;
for($i=2;$i<=20;++$i){
    $a=readline("entrez un nombre meme négatif");
    if($b<$a){
        $b=$a;
    }
}
echo("le nombre maximum sur les 20 saisies est $b");
