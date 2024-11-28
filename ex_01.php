<?php
function which_is_longer(string $str1 = null, string $str2 = null): int {
    if (!is_string($str1) || !is_string($str2)) {
        return -1;
    }
    $len1 = strlen($str1);
    $len2 = strlen($str2);
    if ($len1 > $len2) {
        return $len1;
    } elseif ($len2 > $len1) {
        return $len2;
    } else {
        return $len1;
    }
}

// Appels pour tester la fonction
echo which_is_longer("hello", "world") . PHP_EOL; 
echo which_is_longer("short", "longerString") . PHP_EOL; 
echo which_is_longer(null, "test") . PHP_EOL; 



