<?php
include_once 'fonctions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorem Ipsum generator</title>
</head>
<body>
    <form method="post">
        <label for="nb">Nombre de paragraphes</label>
        <input type="number" value="5" name="count" id="nb">
    </form>

<?php
$nb = $_POST['count']
$nbElementsInIpsum = count(IPSUM_ARRAY)
$j=0;
    for($i=0; $i<$nb; $i++) {

        $paragraphe=IPSUM_ARRAY[$j];
        $j++;
        titre("Paragraphe ".($i+1), level: 6);

        if($j==$nbElementsInIpsum) {
            $j=0;
        }

        echo "<div>$paragraphe</div>";
    }
?>
</body>
</html>