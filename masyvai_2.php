<!DOCTYPE html>
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./quad.css">
    <title>PHP LESSONS</title>
</head>
<body>
<?php
    function cmp($a, $b){
        return $a <=> $b;
    }

    function cmp2($a, $b){
        if(in_array("K", $a) && !in_array("K", $b)) 
            return -1;
        elseif(!in_array("K", $a) && in_array("K", $b))
            return 1;
        else 
            return cmp($a, $b);
    }

    function printArray($array) {
        echo "[ ";
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                printArray($value);
            } else {
                echo "$value";
            }
    
            if ($key < count($array) - 1) {
                echo ", ";
            }
        }
        echo " ]<br/>";
    }
    function generateRandomColor() {
        $color = '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
        return $color;
    }
    // 1. 
    echo "1. Uzduotis. </br>";
    $masyvas1 = [];
    $countBigger10 = 0;
    $biggest = 0;
    $indexesSum = array_fill(0, 5, 0);
    $mazujuMasyvuSumos = [];
    for($i = 0; $i < 10; $i++){
        $temp = [];
        $sum = 0;
        for($x = 0; $x < 5; $x++)
        { 
            $meh = rand(5,25); 
            $indexesSum[$x] += $meh;
            $sum += $meh;
            if($meh > $biggest){
                $biggest = $meh;
            }
            if($meh > 10)
                $countBigger10++;      
            $temp[] = $meh;
        }
        $mazujuMasyvuSumos[] = $sum;
        $masyvas1[] = $temp;
    }
    printArray($masyvas1);


    // 2. 
    echo "2. Uzduotis. </br>";
    echo "2a. Uzduotis. </br>";
    echo "Masyve yra $countBigger10 reiksmiu didesniu uz 10. </br>";

    echo "2b. Uzduotis. </br>";
    echo "Didziausia reiksme masyve yra $biggest . </br>";

    echo "2c. Uzduotis. </br>";
    echo "Verciu su tais paciais indexais suma lygi: . </br>";
    print_r($indexesSum);
    echo "</br>";

    forEach($masyvas1 as &$innerMassive){
        $innerMassive[] = 0;
        $innerMassive[] = 0;
    }
    echo "2d. Uzduotis. </br>";
    echo "Masyvas padidintas dviejom reiksmem: . </br>";
    print_r($masyvas1);
    echo "</br>";

    echo "2e. Uzduotis. </br>";
    echo "Masyvas is mazuju masyvu sumu: . </br>";
    print_r($mazujuMasyvuSumos);
    echo "</br>";

    // 3. 
    echo "3. Uzduotis. </br>";
    $masyvas2 = array_fill(0, 10, 0);
    $capitalLetters = range('A', 'Z');
    forEach($masyvas2 as &$masyvukas){
        $masyvukas = array_fill(0, rand(2,20), 0);
        forEach($masyvukas as &$raide){
            $raide = $capitalLetters[rand(0,25)];
        }
    }
    echo "Masyvas mazuju raidziu masyvu: </br>";
    print_r($masyvas2);
    echo "</br>";

    forEach($masyvas2 as &$masyvukas){
        usort($masyvukas, 'cmp');
    }
    echo "Isrusiuoti mazuju raidziu masyvai: </br>";
    print_r($masyvas2);
    echo "</br>";

    // 4. 
    echo "4. Uzduotis. </br>";
    usort($masyvas2, 'cmp2');
    printArray($masyvas2);
    echo "</br>";

    // 5. 
    echo "5. Uzduotis. </br>";
    $masyvas3 = [];
    
    function seat($user){
        $place = rand(0,100);
        return ['user_id' => $user, 'place_in_row' => $place ];
    }

    for($i = 0; $i < 30; $i++){
        do {
            $user_id = rand(1,1000000);
        } while ((in_array($user_id, $masyvas3)));
        $masyvas3[] = $user_id;
    }
    $masyvas3 = array_map('seat', $masyvas3);
    print_r($masyvas3);
    echo "</br>";

    // 6. 
    echo "6. Uzduotis. </br>";
    usort($masyvas3, function($a, $b){
        return $a['user_id'] <=> $b['user_id'];
    });
    print_r($masyvas3);
    echo "</br></br>";

    usort($masyvas3, function($a, $b){
        return $a['place_in_row'] <=> $b['place_in_row'];
    });
    print_r($masyvas3);
    echo "</br>";

    // 7. 
    echo "7. Uzduotis. </br>";
    function genString(){
        $abc = range('a','z');
        $len = rand(5,15);
        $word = '';
        for($i = 0; $i < $len; $i++){
            $word .= $abc[rand(0,25)];
        }
        return $word;
    }
    function add_extra($a){
        $name = genString();
        $surname = genString();
        return ['user_id' => $a['user_id'], 'place_in_row' => $a['place_in_row'], 'name' => $name, 'surname' => $surname ];
    }
    $masyvas3 = array_map('add_extra', $masyvas3);
    print_r($masyvas3);
    echo "</br>";

    // 8. 
    echo "8. Uzduotis. </br>";    
    $masyvas4 = [];
    for($i = 0; $i < 10; $i++){
        $len = rand(0,5);
        if($len == 0)
            $masyvas4[] = rand(0,10);
        else{
            $temp = [];
            for($x = 0; $x < $len; $x++){
                $temp[] = rand(0,10);
            }
            $masyvas4[] = $temp;
        }
    }
    printArray($masyvas4);
    echo "</br>";

    // 9. 
    echo "9. Uzduotis. </br>";  

    function rusiavimas($el){
        if(is_array($el)){
            $sum = 0; 
            for($i = 0; $i < count($el); $i++){
                $sum += $el[$i];
            }
            return $sum;
        }
        return $el;
    }


    $masyvas4 = array_map("rusiavimas", $masyvas4);
    usort($masyvas4, 'cmp');
    printArray($masyvas4);
    echo "</br>";

    // 10. 
    echo "10. Uzduotis. </br>";  
    $masyvas5 = [];
    $symb = ['#', '%', '+', '*', '@', '裡'];
    $symbLen = count($symb);

    for($i = 0; $i < 10; $i++){
        $masyvas5[$i] = [];
        for($x = 0; $x < 10; $x++){
            $value = $symb[rand(0,$symbLen-1)];
            $color = generateRandomColor();
            $masyvas5[$i][$x] = ["value" => $value, "color" => $color];
        }
    }

    function generateQuad($mas){
        $smallerDivs = ""; 
        for($i = 0; $i < 100; $i++){
            $x = ($i%10);
            $y = (($i - $x)/10);
            $value = $mas[$x][$y]['value'];
            $color = $mas[$x][$y]['color'];
            $smallerDivs .= "<div class=\"small H$x V$y\" style=\"background-color: $color \"> <p> $value </p> </div>";
        }
        echo "<div class=\"big\"> $smallerDivs </div>";
    }
    
    generateQuad($masyvas5);
    ?>
</body>
</head>

      
     
     
     
11. Duotas kodas, generuojantis masyvą:
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.