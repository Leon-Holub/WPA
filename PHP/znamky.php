<?php
declare(strict_types=1);

/**
 * Generuje známku 0-5 kde 0 značí nehodnoceno
 * @return int
 */
function generujZnamku(): int
{
    return rand(0, 5);
}

/**
 * @param array $znamky
 * @return float
 */
function ziskejPrumerHodnocenych(array $znamky): float
{
    $poc = 0;
    $sum = 0;
    foreach ($znamky as $znamka) {
        if ($znamka != "-") {
            $poc++;
            $sum += $znamka;
        }
    }
    return round($sum / $poc);
}

/**
 * @param array $znamky
 * @return float
 */
function ziskejPrumerSFilterm(array $znamky): float
{
    $filtrovaneZnamky = array_filter($znamky, function ($z) {
        return $z != 0 && $z != "-";
    });

    return round(array_sum($filtrovaneZnamky) / count($filtrovaneZnamky));
}

/**
 * @param array $znamky
 * @return bool
 */
function proselVsim(array $znamky): bool
{
    return !in_array(5, $znamky) && !in_array("-", $znamky);
}


$predmety = ["Matematika", "Čeština", "Webovky"];

$studenti = ["Adam", "Eliška", "Tereza"];

$vysledky = [];

foreach ($studenti as $student) {
    foreach ($predmety as $predmet) {
        $znamka = generujZnamku();
        if ($znamka == 0) {
            $znamka = "-";
        }
        $vysledky[$student][$predmet] = $znamka;
    }
}

print_r($vysledky);
?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Známky</title>
</head>
<body>
<table style="width: 100%">
    <tr>
        <th>Jméno</th>
        <?php foreach ($predmety as $predmet): ?>
            <th><?= $predmet ?></th>
        <?php endforeach ?>
        <th>Průměr</th>
        <th>Prošel vším</th>
    </tr>
    <?php foreach ($vysledky as $student => $znamkyStudenta): ?>
        <tr style="text-align: center">
            <td><?= $student ?></td>
            <?php foreach ($znamkyStudenta as $predmet): ?>
                <td><?= $predmet ?></td>
            <?php endforeach ?>
            <td style="font-weight: bold">
                <?= ziskejPrumerSFilterm($znamkyStudenta) ?>
            </td>
            <td>
                <?php
                if (proselVsim($znamkyStudenta)) {
                    echo "Ano";
                } else {
                    echo "Ne";
                }
                ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>
