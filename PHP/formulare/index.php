<?php

if (isset($_GET["name"])) {
    echo $_GET["name"];
}

?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="get" action="index.php">
    <label for="name">Jméno</label>
    <input type="text" name="name" id="name" value="<?= isset($_GET["name"]) ? $_GET["name"] : "" ?>">

    <input type="submit">
</form>

<form method="post" action="vysledek.php">
    <label for="name">Jméno</label>
    <input type="text" name="name" id="name">

    <label for="age">Věk</label>
    <input type="number" name="age" id="age" min="0" max="99">

    <input type="submit">
</form>

</body>
</html>
