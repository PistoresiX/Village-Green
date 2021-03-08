<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$opéun = 10;
$opédeux = 5;
function calculator($opéun, $opédeux)
{

    $add = $opéun + $opédeux;
    $mul = $opéun * $opédeux;
    $div = $opéun / $opédeux;
    $sou = $opéun - $opédeux;
    $retour = array($add, $mul, $div, $sou);

    return $retour;
}

print_r(calculator (10, 5));
?>
</body>
</html>