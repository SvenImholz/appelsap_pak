<?php

// $straat = "Harste";
// $huisnr = "4";
// $postc = "8602 XJ";
// $plaats = "Sneek";

// $kleur = "red";
// $age = 29;
// $lengte_in_m = 1.75;
// $am_i_student = TRUE;

$huidig_jaar = 2025;

$geboortejaar = 1995;

$leeftijd = $huidig_jaar - $geboortejaar;

// echo $leeftijd;

// 1.5.9

// $prijs = 69.420;

// const BTW = 0.21;

// echo $prijs * (BTW + 1);


// 1.5.10

// $ik_heb_rijbewijs = true;

// if ($ik_heb_rijbewijs) {
//     echo "Jij mag op de weg";
// } else {
//     echo "Jij moet nog even lessen";
// }

// 1.5.11

// $fav_movie = "The lord of the rings";

// $director = "Tim Hofman";

// $printable = "$fav_movie, $director";


// 1.5.12

// $siblings = 4;
// $cousins = 15;

// echo $siblings + $cousins;

// 1.5.13

// $full_name = "  Sven de Imholz ";

// $no_whitespace = str_replace(" ", "", $full_name);

// echo $no_whitespace . '<br>';
// echo strlen($no_whitespace);

// 1.5.14

// echo $leeftijd * 365;

// 1.5.15

$prijs = 5.0;

// echo $prijs * 0.85;

// 1.5.16

$heb_huisdier = false;

$visible = false;

?>

<p <?= $visible ? '' : 'hidden' ?>><?= $heb_huisdier ? "Jeej" : "Koop een" ?></p>

<?php

// 1.5.17

$best_line = "They are taking the hobbits to Isengard";

// echo str_word_count($best_line);

// 1.5.18

$getal = 88;

// echo $getal % 44 . "<br>";

// echo $getal % 2 == 0 ? "even" : "oneven";

// 1.5.19

$c = 23.0;

$f = ($c * 9 / 5) + 32;

// echo $f;

// 1.5.20

$email = "sven.imholz@firda.nl";
$not_email = "sven.imholz.firda.nl";

$is_valid = filter_var($not_email, FILTER_VALIDATE_EMAIL);

// var_dump($is_valid);



// 1.5.21

$getal = 3;
$resultaat = 0;

for ($i = 0; $i <= $getal; $i++) {
    // echo $i . "<br>";
    $resultaat += $i;
}

// echo "Het resultaat is: $resultaat";

// 1.5.21

$words = explode(" ", $best_line);
$reversed_words = array_reverse($words);
echo "<pre>";
print_r($reversed_words);
echo "</pre>";

foreach ($reversed_words as $word) {
    echo $word . " ";
}


// echo $reversed_best_line;