<?php
$tarvikud = array(
    array(
        category => 'praed',
        name => 'Sealihapada ploomide ja aprikoosiga',
        description => 'Sealihapada, kartul, sai, salat, leib',
        price => 2.65,
    ),
    array(
        category => 'praed',
        name => 'Praetud kanakints',
        description => 'Kanakints, lisand, kartul, sai, leib',
        price => 2.50,
    ),
    array(
        category => 'praed',
        name => 'Hakklihakaste',
        description => 'Hakklihakaste, lisand, kartul, sai, leib',
        price => 2.20,
    ),
    array(
        category => 'supid',
        name => 'Kõrvitsa püreesupp',
        description => 'supp',
        price => 1.60,
    ),
    array(
        category => 'magustoidud',
        name => 'Mannavaht',
        description => 'Mannanevaht',
        price => 1.60,
    ),
    array(
        category => 'joogid',
        name => 'Piim',
        description => null,
        price => 0.2,
    ),
    array(
        category => 'joogid',
        name => 'Mahl',
        description => null,
        price => 0.2,
    ),
    array(
        category => 'joogid',
        name => 'Keefir',
        description => null,
        price => 0.2,
    ),
    array(
        category => 'joogid',
        name => 'Kakao',
        description => null,
        price => 0.2,
    ),
    array(
        category => 'joogid',
        name => 'Tee',
        description => null,
        price => 0.2,
    ),
    array(
        category => 'joogid',
        name => 'Jogurt',
        description => null,
        price => 0.2,
    ),
);
function reducePrice($discountPercentage, $price)
{
    return round(($price * (100 - $discountPercentage) / 100), 2);
};
function displaytarvikud($category)
{
    global $tarvikud;
    foreach ($tarvikud as $tarvik) {
        if ($tarvik[category] === $category) {
            echo '
            <li class="list-group-item">
              <p>' . $tarvik[name] . '
              <span class="badge badge-info">' . $tarvik[price] . '€</span>
              <span class="badge badge-success">' . ($tarvik[category] === 'joogid' ? null : reducePrice(15, $tarvik[price]) . '€') . '</span></p>
              <p class="text-secondary font-weight-light">' . $tarvik[description] . '</p>
            </li>
          ';
        }
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kooli söökla menüü</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
</head>

<body>

<div class="container-fluid text-center">

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-header">PRAED <i class="fas fa-utensils"></i></h2>
                    <ul class="praed list-group">

                        <?php
                        displaytarvikud('praed');
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-header">SUPID <i class="fas fa-utensil-spoon"></i></h2>
                    <ul class="supid list-group">

                        <?php
                        displaytarvikud('supid');
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-header">MAGUSTOIDUD <i class="fas fa-cookie-bite"></i></h2>
                    <ul class="magustoidud list-group">

                        <?php
                        displaytarvikud('magustoidud');
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-header">JOOGID <i class="fas fa-glass-whiskey"></i></h2>
                    <ul class="joogid list-group">

                        <?php
                        displaytarvikud('joogid');
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

</html>