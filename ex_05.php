<?php
function str_lower_epur(string $str = null): mixed {
    if (!is_string($str) || $str === null) {
        return null;
    }

    // Supprime les espaces inutiles et les espaces en début/fin
    $str = preg_replace('/\s+/', ' ', trim($str));

    // Mettre une majuscule à la fin de chaque mot
    $words = explode(' ', $str);
    $result = array_map(function ($word) {
        $lastChar = strtoupper(substr($word, -1)); // Dernier caractère en majuscule
        $rest = strtolower(substr($word, 0, -1)); // Reste en minuscule
        return $rest . $lastChar;
    }, $words);

    return implode(' ', $result);
}

// Appels pour tester la fonction
echo str_lower_epur("Un PanGolin CacHe") . PHP_EOL; // uN pangoliN cachE
echo str_lower_epur("    trop   d'espaces   ") . PHP_EOL; // troP d'espaceS
echo str_lower_epur(null) . PHP_EOL; // NULL
