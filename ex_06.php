<?php
function str_to_wordtab(string $str = null, string $delim = null): mixed {
    if (!is_string($str) || !is_string($delim) || $str === null || $delim === null) {
        return null;
    }

    // Découpe la chaîne avec le délimiteur
    $result = explode($delim, $str);
    return $result;
}

// Appels pour tester la fonction
print_r(str_to_wordtab("Mais tu es tout la", ' ')); // ["Mais", "tu", "es", "tout", "la"]
print_r(str_to_wordtab("1,2,3,4,5", ','));         // ["1", "2", "3", "4", "5"]
print_r(str_to_wordtab(null, ','));                // NULL
