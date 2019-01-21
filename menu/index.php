<?php
/**
 * Created by PhpStorm.
 * User: steven.kore
 * Date: 21.01.2019
 * Time: 15:11
 */
$menu = array(
    array(
        'tyyp' => 'praed',
        'nimi' => 'Kanafilee',
        'hind' => 2.60
    ),
    array(
        'tyyp' => 'praed',
        'nimi' => 'Kanakaste',
        'hind' => 2.40
    ),
    array(
        'tyyp' => 'supid',
        'nimi' => 'Borš',
        'hind' => 1.40
    ),
    array(
        'tyyp' => 'magustoidud',
        'nimi' => 'Tiramisu',
        'hind' => 1.20
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Morss',
        'hind' => 0.35
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Piim',
        'hind' => 0.50
    ),
    array(
        'tyyp' => 'joogid',
        'nimi' => 'Mahl',
        'hind' => 0.50
    ),
    array(
        'tyyp' => 'supid',
        'nimi' => 'Kanasupp',
        'hind' => 1.85
    ),
    array(
        'tyyp' => 'magustoidud',
        'nimi' => 'Kreembrülee',
        'hind' => 1.90
    ),
);
function omaHind($ale, $hind)
{
    return round(($ale * $hind), 2);
}

;
function kuvaMenu($tyyp)
{
    global $menu;
    foreach ($menu as $roog) {
        if ($roog['tyyp'] === $tyyp) {
            echo '<li class="list-group-item">
                    <p>' . $roog['nimi'] . ' ' . '<span class="badge badge-primary">' . $roog['hind'] . '€</span>
                    <span class="badge badge-success">' . omaHind(0.75, $roog['hind']) . '€' . '</span>
                    </p>
                </li>';
        }
    }
}

;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sööklamenüü</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Söökla menüü</h1>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">PRAED</h1>
                <ul class="list-group">

                    <?php
                    kuvaMenu('praed');
                    ?>

                </ul>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <h1 class="card-header">SUPID</h1>
                <ul class="list-group">

                    <?php
                    kuvaMenu('supid');
                    ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">MAGUSTOIDUD</h1>
                <ul class="list-group">
                    <?php
                    kuvaMenu('magustoidud');
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <h1 class="card-header">JOOGID</h1>
                <ul class="list-group">
                    <?php
                    kuvaMenu('joogid');
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>