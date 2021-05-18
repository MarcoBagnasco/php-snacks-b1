<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    <h1>PHP Snacks</h1>

    <!-- SNACK 1 -->
    <h2>Snack 1</h2>

    <?php 
    // Matches Array
    $matches = [
        [
            'home_team' => 'Nets',
            'away_team' => 'Cavaliers',
            'home_point' => 123,
            'away_point' => 109,
        ],
        [
            'home_team' => 'Hawks',
            'away_team' => 'Rockets',
            'home_point' => 124,
            'away_point' => 95,
        ],
        [
            'home_team' => 'Thunder',
            'away_team' => 'Clippers',
            'home_point' => 117,
            'away_point' => 112,
        ],
        [
            'home_team' => 'Pelicans',
            'away_team' => 'Lakers',
            'home_point' => 98,
            'away_point' => 110,
        ],
        [
            'home_team' => 'Kings',
            'away_team' => 'Jazz',
            'home_point' => 99,
            'away_point' => 121,
        ],
    ];

    // Print Match Results
    for($i = 0; $i < count($matches); $i++) { ?>
    <ul>
        <li><?php echo $matches[$i]['home_team'] . ' - '
        . $matches[$i]['away_team'] . ' | ' . 
        $matches[$i]['home_point'] . '-' . $matches[$i]['away_point']?></li>
    </ul>
    <?php } ?>

    <!-- SNACK 2 -->
    <h2>Snack 2</h2>

    <?php
    // Data from query string 
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if(!empty($name) && !empty($mail) && !empty($age)) {
        // Name validation
        if(strlen($name) < 4){
            echo "Access Denied. Name '$name' it's too short";
        } 
        // Mail validation
        elseif(strpos($mail, '@') === false || strpos($mail, '.') === false){
            echo "Access Denied. Mail '$mail' it's not valid";
        } 
        // Age validation
        elseif(!is_numeric($age)){
            echo "Access Denied. Age '$age' it's not valid";
        }
        // Access allowed
        else {
            echo "Access Allowed. Welcome $name";
        }
    } 
    // Lack of data
    else {
        echo "Access Denied. Lack of data. We need name, mail and age ";
    }
    ?>

    <!-- SNACK 3 -->
    <h2>Snack 3</h2>

    <?php
    $arr_length = 15;
    $random_numbers = [];
    // Populate Array
    while(count($random_numbers) < $arr_length){
        $num = rand(1, 100);

        if(!in_array($num, $random_numbers)){
            $random_numbers[] = $num;
        }
    }
    var_dump($random_numbers);
    ?>
</body>
</html>