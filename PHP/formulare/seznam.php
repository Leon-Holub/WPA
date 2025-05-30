<?php
session_start();

if (isset($_GET["item"])) {
    $_SESSION["items"][] = $_GET["item"];
    $items = $_SESSION["items"];
} else {
    $items = $_SESSION["items"] ?? [];
}

?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nákupní seznam</title>
</head>
<body>
<form action="seznam.php" method="get">
    <label for="addItem">Přidat položku:</label>
    <input type="text" name="item" id="addItem">

    <input type="submit">
</form>

<ul>
    <?php foreach ($items as $item): ?>
        <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>

<br>

</body>
</html>
