<?php


/*****************************************/
/********** Les boucles : While **********/
/*****************************************/
$nombreMouton = 1;
echo "1.Je vais compter les moutons pour dormir : <br>";
while ($nombreMouton <= 5) {
    echo $nombreMouton . " mouton(s) <br>";
    $nombreMouton++;
}
echo "Je dors enfin...<br><br>";

//-----------------------------------------
//Une autre façon d'utiliser la boucle while
$nombreMouton = 1;
$dormir = false;
echo "2.Je vais compter les moutons pour dormir : <br>";
while ($dormir === false) {
    echo $nombreMouton . " mouton(s) <br>";
    $nombreMouton++;
    if ($nombreMouton > 5) {
        $dormir = true;
    }
}
echo "Je dors enfin...<br><br>";


/**
 * Utililisez les deux exemples en haut pour compter 25 vaches.
 */


// TODO Votre code ici !

$vaches = 1;
echo "Je vais compter les vaches pour le fun : <br>";
while ($vaches <= 25){
    echo $vaches . "vaches <br>";
    $vaches++;
}
echo "J'ai fini... <br><br>";


$nombreVaches = 1;
$fini = false;
echo "Allez encore une fois : <br>";
while ($fini === false){
    echo $nombreVaches . "vaches <br>";
    $nombreVaches++;
    if ($nombreVaches > 25){
        $fini = true;
    }
}
echo "J'ai encore fini ...";
