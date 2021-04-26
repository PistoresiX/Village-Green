PHP 06 - Les dates et les heures


Exercice 1

Affichez la date du jour au format mardi 2 juillet 2019. 

 <?php
    $mois = array(1=>'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
    $jours = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
    echo 'Nous sommes le '.$jours[date('w')].' '.date('j').' '.$mois[date('n')].' '.date('Y');
 ?>


Exercice 2

Trouvez le numéro de semaine de la date suivante : 14/07/2019. 

<?php
$DateDisplay = '2019/07/14 ' ;
echo 'Semaine' . date('W',strtotime($DateDisplay)) . ' de ' . date('Y',strtotime($DateDisplay));
?>
// Semaine28 de 2019

Exercice 3

Combien reste-t-il de jours avant la fin de votre formation.

<?php
$datetime1 = date_create('2021-04-01'); // Date fixe
$datetime2 = date_create('2021-09-03'); // Date fixe
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%a jours'); 
?>
//+155 jours

Exercice 4

Reprenez l'exercice 3, mais traitez le problème avec les fonctions de gestion du timestamp, time() et mktime(). 

// timestamp

<?php
$date = new DateTime("2021-09-03");
echo $date->getTimestamp(); 
?>
// result: 1630652400
------------------------------------------
// time()
<?php
$now   = time();
$date2 = strtotime('2021-09-03 08:30:00');
 
function dateDiff($date1, $date2){
    $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
    $retour = array();
 
    $tmp = $diff;
    $retour['second'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['second']) /60 );
    $retour['minute'] = $tmp % 60;
 
    $tmp = floor( ($tmp - $retour['minute'])/60 );
    $retour['hour'] = $tmp % 24;
 
    $tmp = floor( ($tmp - $retour['hour'])  /24 );
    $retour['day'] = $tmp;
 
    return $retour;
}
 
// Test de la fonction
print_r( dateDiff($now, $date2) );
--------------------------------------

// mktime

<?php

$d1 = new DateTime('2021-04-01 8:30:00'); 
$d2 = new DateTime('2021-09-03 8:30:00'); 
$diff = $d1->diff($d2); 
$diffa = $d1->diff($d2); 
$diffm = $d1->diff($d2); 
$diffh = $d1->diff($d2); 
$diffi= $d1->diff($d2); 
$diffs = $d1->diff($d2); 


echo $nb_jours = $diff->d." Jours "; 
echo $nb_mois = $diffm->m." mois "; 
echo $nb_an = $diffa->y." ans "; 
 
?>
-----------------------------------

Exercice 5

Quelle sera la prochaine année bissextile ? 

  <?php
$date = new DateTime();
    for ($i = 0; $i < 4; $i++)
    {
        $date->modify('+1 years');
        if ($date->format('L') == 1)
        {
            ?>
               L'année <?= $date->format('Y') ?> sera la prochaine année bissextile.
               <?php
        }
    }
    ?>


Exercice 6

Montrez que la date du 17/17/2019 est erronée. 

<?php
var_dump(checkdate(17, 17, 2019));
var_dump(checkdate(17, 17, 2019));
?>

-------------------------

Exercice 7

Affichez l'heure courante sous cette forme : 11h25.

<?php
      date_default_timezone_set('Europe/Paris'); // => défini la localisation du fuseau utilisé
    ?>
    <?= date('H\hi e') ?>


Exercice 8

Ajoutez 1 mois à la date courante. 

<?php
$jour = "2021-04-02"; // Notre date par default
echo date('Y-m-d', strtotime($jour. ' + 1 month')); // On ajoute 1 mois
?>
