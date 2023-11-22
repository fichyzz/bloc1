<?php
if(empty)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font-tester</title>
</head>
<body>

<ul>
    <li>
        <a href="?color=red&size=15&message=Texte en rouge">Texte en rouge</a>
    </li>
    <li>
        <a href="?color=green&size=30&message=Texte en vert">Texte en vert</a>
    </li>
    <li>
        <a href="?color=blue&size=50&message=Texte en bleu">Texte en bleu</a>
    </li>
</ul>

    <form action="<?=$_SERVER['PHP_SELF']?>">
        <imput type="number" name="size">
        <imput type="color" name="color">
        <textarea name="message"></textarea>
        <button type="submit">Valider</button>
    </form>

    <div style="color: <?=$color?>;font-size: <?=$size?>px"><?=$message?></div>

<footer>
    <p>Serveur :<strong><?=$_SERVEUR['SERVER_SIGNATURE']?></strong></p>
</footer>
</body>
</html>