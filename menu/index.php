<?php
$dishes = array(
    array(
        category => 'praed',
        name => 'Sealihapada ploomide ja aprikoosiga',
        description => 'Sealihapada, lisand, kartul, sai, salat, leib',
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
        description => 'Hakklihakaste, kartul, lisand, leib, sai',
        price => 2.45,
    ),
    array(
        category => 'supid',
        name => 'Rassolnik',
        description => 'Supp',
        price => 1.50,
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
        description => 'lehmalt saadud',
        price => 0.20,
    ),
    array(
        category => 'joogid',
        name => 'Mahl',
        description => 'värskelt pressitud marjast',
        price => 0.20,
    ),
    array(
        category => 'joogid',
        name => 'Keefir',
        description => null,
        price => 0.20,
    ),

    array(
        category => 'joogid',
        name => 'Jogurt',
        description => null,
        price => 0.50,
    ),

    array(
        category => 'joogid',
        name => 'Kakao',
        description => null,
        price => 0.40,
    ),

    array(
        category => 'joogid',
        name => 'Tee',
        description => null,
        price => 0.30,
    ),
);

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
                        displayDishes('praed');
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
                        displayDishes('supid');
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
                        displayDishes('magustoidud');
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
                        displayDishes('joogid');
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

</html>