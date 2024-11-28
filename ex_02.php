<?php
function my_rounds(float $nb): void {
    $arr1 = round($nb);   // Arrondi à l'entier le plus proche
    $arr2 = ceil($nb);    // Arrondi supérieur
    $arr3 = floor($nb);   // Arrondi inférieur
    echo "Results : [$arr1] - [$arr2] - [$arr3]" . PHP_EOL;
}

// Appels pour tester la fonction
my_rounds(4.5);  
my_rounds(3.2);  
my_rounds(-2.8); 

