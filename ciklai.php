<!DOCTYPE html>
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP LESSONS</title>
</head>
<body>
<?php
    // 1. 
    echo "1. Uzduotis. </br>";
    $stars = str_repeat("*", 400);
    echo "<p class=\"long\">{$stars}</p>";
    $newStars = $stars;
    $i=50;
    // $mod = substr_replace($txt, $insert, 5,0); 
    // 4th arg: if negative - tells how many chars to leave, if positive - tells how many to replace
    // if 0 - inserts between 3arg - whichi is position - and 3arg + 1
    while($i < strlen($newStars)){
        $newStars = substr_replace($newStars, "</br>", $i, 0);
        $i = $i + 50 + 5; // +5 cause of </br>
    }
    echo $newStars."</br></br>";

    // 2. 
    echo "2. Uzduotis. </br>";
    $count = 0;
    for($i = 0; $i < 300; $i++){
        $meh = rand(0,300);
        if($meh > 150) $count++;
        if($meh > 275){
            echo "<span style=\"color: red;\">{$meh} </span>";
        }
        else{
            echo $meh." ";
        }
    }
    echo "</br> There are $count numbers that are greater than 150.</br></br>";

    // 3. 
    echo "3. Uzduotis. </br>";
    $limit = rand(3000,4000);
    $ans = "";
    for($i = 77; $i <= $limit; $i++){
        if($i % 77 == 0 && $i == $limit)
            $ans = $ans."{$i}.";
        else if($i % 77 == 0)
            $ans = $ans."{$i}, ";
    }
    echo "<p class=\"long\">{$ans}</p></br></br>";

    // 4-5. 
    echo "4-5. Uzduotis. </br>";
    $stars100 = "";
    for($i = 0; $i < 100; $i++){
        for($y = 0; $y < 100; $y++){
            if($y == $i || $y == 99 - $i){
                $stars100 .= "<span style=\"color: red;\">* </span>";
            }
            else{
                $stars100 .= "* ";
            }
        }
        echo "<pc class=\"cube\">$stars100</p>";
        $stars100 = "";
    }
    // 6. 
    echo "6. Uzduotis. </br>";
    $iskrito = null;
    $statistikaS = 0;
    $statistikaH = 0;
    while($statistikaH == 0)
    {
        $iskrito = rand(0,1);
        if($iskrito == 1)
            $statistikaS++;
        else
            $statistikaH++;
    }
    echo "6a. Monetos metimo statistika iki iškrito herbas. Skaicius iskrito $statistikaS kartus. </br>";
    $statistikaS = 0;
    while($statistikaH != 3)
    {
        $iskrito = rand(0,1);
        if($iskrito == 0) 
            $statistikaH++;
        else
            $statistikaS++;
    }
    echo "6b. Monetos metimo statistika iki iškrito 3 herbai. Skaicius iskrito $statistikaS kartus, o herbas iskrito $statistikaH kartu. </br>";
    $statistikaS = 0;
    $statistikaH = 0;
    while($statistikaH != 3)
    {
        $iskrito = rand(0,1);
        if($iskrito == 0) 
            $statistikaH++;
        else{
            $statistikaS++;
            $statistikaH = 0;
        }
    }
    echo "6c. Monetos metimo statistika iki iškrito 3 herbai is eiles. Skaicius iskrito $statistikaS kartus, o herbas iskrito $statistikaH kartu. </br>";
 
    // 7. 
    echo "7. Uzduotis. </br>";
    $kazys = 0;
    $petras = 0;
    while($kazys < 222 || $petras < 222){
        $kazys += rand(5,25);
        $petras += rand(10,20);
    }
    $winner = $kazys > $petras ? "Kazys" : ($kazys < $petras ? "Petras" : "lygiosios");
    echo "Partiją laimėjo:".$winner."</br>";

    // 8. 
    echo "8. Uzduotis. </br>";

    ?>
</body>
</head>

