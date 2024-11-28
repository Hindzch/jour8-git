<?php
function get_median(array $vals = null): mixed {
    if (!is_array($vals) || empty($vals)) {
        return null;
    }

    sort($vals); // Trie le tableau
    $count = count($vals);
    
    if ($count % 2 === 1) {
        // Nombre impair, retourne la valeur centrale
        return $vals[floor($count / 2)];
    } else {
        // Nombre pair, calcule la moyenne des deux valeurs centrales
        $mid1 = $vals[$count / 2 - 1];
        $mid2 = $vals[$count / 2];
        return ($mid1 + $mid2) / 2;
    }
}

// Appels pour tester la fonction
print_r(get_median([11, 2, 23, 5, 9, 84, 25]) . PHP_EOL); // 11
print_r(get_median([11, 2, 23, 5, 9, 84, 11, 3]) . PHP_EOL); // 10
print_r(get_median([999, 0]) . PHP_EOL); // 499.5
print_r(get_median([]) . PHP_EOL); // NULL
