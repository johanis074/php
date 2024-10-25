<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      <div class="img_div">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

    <h1>Les variables en PHP</h1>

    <div class="topnav">
        <a href="01_bases.php">01.Les bases</a>
        <a href="02_variables.php">02.Les variables</a>
        <a href="03_constantes.php">03.Les constantes</a>
        <a href="04_arithmetiques.php">04.Arithméthiques</a>
        <a href="05_conditions.php">05.Conditions</a>
        <a href="06_tableaux.php">06.Tableaux</a>
        <a href="07_boucles_tableau.php">07.Boucles</a>
        <a href="08_dates.php">08.Dates</a>
        <a href="09_fonctions.php">09.Fonctions</a>
        <a href="10_inclusion.php">10.Inclusion</a>
    </div>

<?php
echo '<h2>Variable: déclaration et affectation</h2>';

$a = 127;
echo gettype($a); // integer

echo "<br>";

$sentence = "Voyons voir le type de celui ci";
echo gettype($sentence); // string

echo "<br>";

$check = true;
echo gettype($check); // true
?>

</body>
</html>