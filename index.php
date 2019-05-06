<?php

$resultat = '<ul>';
for ($i = 1 ; $i <= 100 ; $i++){
    $resultat .= '<li>' . $i . '</li>';
}

$resultat .= "</ul>"; 


$resultat = '<ul>';
for ($i = -12328 ; $i <= 23456 ; $i += 7){
    if ($i % 5 == 0) {
    $resultat .= '<li>' . $i . '</li>';
    }
}

$resultat .= "</ul>";

echo $resultat;

