<?php
function my_mail(string $mail): void {
    $atPos = strpos($mail, '@'); // Trouve la position du premier '@'
    $dotPos = strrpos($mail, '.'); // Trouve la position du dernier '.'

    // Vérifie si les positions sont valides
    if ($atPos !== false && $dotPos !== false && $dotPos > $atPos) {
        $result = substr($mail, $atPos + 1, $dotPos - $atPos - 1); // Extrait la sous-chaîne
        echo $result . PHP_EOL;
    }
}

// Appels pour tester la fonction
my_mail("fakemail@mon.mail.com"); // Affiche : mon.mail
my_mail("invalidemail.com");      // N'affiche rien
my_mail("another@test.email.net"); // Affiche : test.email
