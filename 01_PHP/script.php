<?php

$blabla = "blabla";
$x = 10;
$y = 50;

// echo affiche une donnée dans la page
// ici à l'endroit où le fichier est importé
echo ($x+$y);
echo ($blabla);

// Pour les fichier ne contentant que du PHP (pas de HTML)
// Convention : on ne ferme pas la balise PHP de manière
// à éviter des caractères
// accidentels qui seraient considérés comme du HTML ;
// ceci pouvant être source de bug
// ?>
