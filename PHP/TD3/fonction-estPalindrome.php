<?php
function estPalindrome(string $s):bool{
    $y=true;
    $nb=strlen($s);
    $reste=$nb%2;
    $nb=($nb-$reste)/2;
    while $i<$nb{
        if ($s[$i]!=[$nb*2-($i+1-$reste)]){
            $y=false;
        }
        $i++;
    }
    return $y;
}
///*
//Donnée:une chaine de caractère
//Résulats:renvoie un boolean qui sera vrai si le mot est un palindrome sinon il renverra faux.
///*
