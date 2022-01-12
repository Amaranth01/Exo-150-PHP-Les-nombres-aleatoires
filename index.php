<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$random = rand(0, 50);
echo "<div> $random </div>";

/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$random2 = rand(50, getrandmax());
echo "<div> $random2 </div>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 50
 * ==> si le nombre est inférieur ou égal à 25, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$random3 = rand(0, 50);
echo "<div> $random3 </div>";
if ($random3 < 25) {
    echo "<p>Vous avez gagné</p>";
}
elseif ($random3 > 25) {
    echo "<p>Vous avez perdu</p>";
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function minAndMax (Int $min, Int $max ): Int {
    $random = rand($min, $max);
    if ($random >= -100) {
        return minAndMax($min, $max);
    }
    else {
        return rand();
    }
}