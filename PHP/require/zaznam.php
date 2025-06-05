<!DOCTYPE html>
<html>
<head>
    <title>Záznam</title>
    <style>
        .post {
            margin-bottom: 1em;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php require_once 'navigation.php'; ?>
<?php require_once 'navigation.php'; ?>

<?php
$soubor = "zaznamy.txt";
if (!empty($_POST["zprava"])) {
    $zprava = trim($_POST["zprava"]);
    $zprava = str_replace(["\r", "\n"], "/n", $zprava);
    file_put_contents($soubor, $zprava . "\n", FILE_APPEND);
}

if (isset($_POST["zprava"])) {
    header("Location: zaznam.php");
}

$zaznamy = file_exists($soubor) ? file($soubor, FILE_SKIP_EMPTY_LINES) : [];

?>

<form method="post">
    <label>Zadej zprávu:</label>
    <textarea name="zprava"></textarea>
    <input type="submit" value="Uložit">
</form>

<h2>Zapsané zprávy:</h2>
<?php
    foreach ($zaznamy as $zaznam){
        require 'prispevek.php';
    }
?>
<?php require_once "paticka.html" ?>
</body>
</html>
