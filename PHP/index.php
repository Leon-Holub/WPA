<?php
$jmeno = "Leon";
$vek = 20;
$oblibeneCislo = 7;
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>PHP Úvod</title>
</head>
<body>
<h1>Moje první PHP stránka</h1>
<p>Ahoj, jmenuji se <strong><?= $jmeno ?></strong>.</p>
<p>Je mi <?= $vek ?> let.</p>
<p>Moje oblíbené číslo je <?= $oblibeneCislo ?>.</p>


<!-- part 2  podmínky -->
<p>
    <?php
    if ($vek >= 18) {
        echo "Jsi plnoletý.";
    } else {
        echo "Jsi nezletilý.";
    }
    ?>
</p>

<?php
switch ($vek) {
    case 18:
        echo "Je ti 18. Jupí";
        break;
    case 20:
        echo "Už nejsi teen";
        break;
}
?>

<br>
<!-- part 3 - pole -->
<?php
$array = [1, 2, 3, 4, 5];

echo $array[0];

foreach ($array as $num) {
    echo $num;
}

echo "<br>";

$stringArray = ["A", "B", "DÉ"];
echo $stringArray[0];
foreach ($stringArray as $sr) {
    echo $sr;
}

print "<br>";
$randomArray = [1, null, "String", 2.5];
echo $randomArray[0];
foreach ($randomArray as $ra) {
    echo $ra . "<br>";
}

print "<br>";
$znamky = [
    "Eliska" => 1,
    "Petr" => 2,
    "Honza" => 5
];

echo $znamky["Eliska"];

?>


</body>
</html>
