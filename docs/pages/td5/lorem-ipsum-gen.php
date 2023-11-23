<?php
include 'fonctions.php';

$a=[1,2,3,"Bonjour"];
titre("Fonction count");
echo count($a). " élément(s) dans a";

titre("Parcours");
titre("Avec foreach", 2);

foreach ($a as $index=>$value) {
    echo "<br>$value à la position $index";
}

titre("For classique", 2)
for($i=0;$i<count($a);$i++) {
    echo "<br>$a[$i] à la position $i";
}