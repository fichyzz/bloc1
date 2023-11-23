<?php
include 'fonctions.php';

$a=[1,2,3,"Bonjour"];
titre("Fonction count");
echo count($a). " élément(s) dans a";

titre("Parcours");
titre("Avec foreach", level: 2);

foreach ($a as $index=>$value) {
    echo "<br>$value à la position $index";
}

titre("For classique", 'Plus long...', 2)
for($i=0;$i<count($a);$i++) {
    echo "<br>$a[$i] à la position $i";
}