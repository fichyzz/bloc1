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
    <form>
        <label for="nb">Nombre de paragraphes</label>
        <input type="number" value="5" name="count" id="nb">
    </form>
<?php
    foreach (IPSUM_ARRAY as $paragraphe) {
        echo "<div>$paragraphe</div>";
    }
?>
</body>
</html>