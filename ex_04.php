<?php
function clear_and_replace(string $string, string $word): string {
    // Supprime les espaces au début et à la fin
    $string = trim($string);

    // Remplace les 2 premières occurrences de $word par "Pangolin"
    $count = 0;
    $result = preg_replace_callback(
        '/\b' . preg_quote($word, '/') . '\b/',
        function ($matches) use (&$count) {
            $count++;
            return $count <= 2 ? "Pangolin" : $matches[0];
        },
        $string
    );

    return $result;
}

// Appels pour tester la fonction
echo clear_and_replace("Salut le chat, le chien et le lapin", "le") . PHP_EOL;
// Affiche : Salut Pangolin chat, Pangolin chien et le lapin
echo clear_and_replace("Pangolin dans le Pangolin", "Pangolin") . PHP_EOL;
// Affiche : Pangolin dans le Pangolin
