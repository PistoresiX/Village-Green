<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Exercice 1 PHP -->
<!-- <?php 
for ($a = 1; $a < 150; $a = $a + 2) { 
    echo $a."<br>"; 
} 
?> -->


<!-- Exercice 2 PHP -->
<!-- <?php
$b = "Je dois faire des sauvegardes régulières de mes fichiers.";
$c = 1;
while ($c < 501) {
    echo $b."<br>";
    $c++;
}
?> -->


<!-- Exercice 3 PHP  -->
<!-- <?php



// $NbrCol : le nombre de colonnes
// $NbrLigne : le nombre de lignes
$NbrCol = 12;
$NbrLigne = 12;
// --------------------------------------------------------
// on affiche en plus sur les 1ere ligne et 1ere colonne
// les valeurs a multiplier (dans des cases en couleur)
// le tableau final fera donc 12 x 12
// --------------------------------------------------------
echo '<table border="1" width="400">';
// 1ere ligne (ligne 0)
echo '<tr>';
echo '<td bgcolor="#CCCCCC">i X j</td>';
for ($j=1; $j<=$NbrCol; $j++) {
echo '<td bgcolor="#FFFF66">'.$j.'</td>';
}
echo '</tr>';
// -------------------------------------------------------
// lignes suivantes
for ($i=1; $i<=$NbrLigne; $i++) {
echo '<tr>';
for ($j=1; $j<=$NbrCol; $j++) {
// 1ere colonne (colonne 0)
if ($j==1) {
echo '<td bgcolor="#FFFF66">'.$i.'</td>';
}


if ($i==$j) {
echo '<td bgcolor="#FFCC66">';
} else {
echo '<td>';
}
echo $i*$j;
echo '</td>';
}
echo '</tr>';
$j=1;
}
echo '</table>';

?> -->
