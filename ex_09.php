<?php
function make_pangolins(array &$my_array): void {
    foreach ($my_array as &$value) {
        $value = "pangolin";
    }
}

// Appels pour tester la fonction
$test_array = ["chat", "chien", "lapin"];
make_pangolins($test_array);
print_r($test_array); // Affiche : ["pangolin", "pangolin", "pangolin"]

$test_array2 = [];
make_pangolins($test_array2);
print_r($test_array2); // Affiche : []
