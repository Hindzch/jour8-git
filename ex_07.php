<?php
function count_char(string $str): array {
    $result = [];
    
    // Parcourir la chaîne caractère par caractère
    foreach (str_split($str) as $char) {
        // Ignorer les espaces et tabulations
        if ($char !== ' ' && $char !== "\t") {
            if (isset($result[$char])) {
                $result[$char]++;
            } else {
                $result[$char] = 1;
            }
        }
    }

    // Trier le tableau par ordre croissant des clés
    ksort($result);
    return $result;
}

// Appels pour tester la fonction
print_r(count_char("Hello World")); // ['H' => 1, 'W' => 1, 'd' => 1, 'e' => 1, 'l' => 3, 'o' => 2, 'r' => 1]
print_r(count_char("H e l l o"));   // ['H' => 1, 'e' => 1, 'l' => 2, 'o' => 1]
