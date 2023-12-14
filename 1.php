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
    $vardas = "Bartas";
    $pavarde = "Dausynas";
    $gimimoMetai = 1989;
    $sieMetai = 2023;
    $amzius = $sieMetai - $gimimoMetai;
    echo "Aš esu $vardas $pavarde. Man yra $amzius metai.</br>";
    
    // 2.
    $a = rand(0,4);
    $b = rand(0,4);
    min($a,$b) != 0 ? $rez = number_format(max($a,$b)/min($a,$b), 2, '.') : $rez = "Negalima dalinti is nulio!";
    echo "2. Uzduotis: {$rez}.</br>";
    
    // 3.
    echo "3. Uzduotis: </br>";
    $c = rand(0,25);
    $d = rand(0,25);
    $e = rand(0,25);
    $f = [$c, $d, $e];
    echo "Pries sort'a </br>";
    print_r($f);
    echo "</br>";
    asort($f, SORT_NUMERIC);
    echo "Po sort'o </br>";
    print_r($f);
    echo "</br>";
    $f = array_values($f); // reindex array
    echo "Po reindexinimo </br>";
    print_r($f);
    echo "</br>";
    echo "Vidurine reiksme yra: $f[1] </br>";
    
    $meh = "neraasta reiksme";
    if(($c>$d && $c<$e) || ($c>$e && $c<$d)){ 
        $meh = $c;
    }
    elseif(($d>$c && $d<$e) || ($d>$e && $d<$c)){ 
        $meh = $d;
    }
    else{
        $meh = $e;
    }
    echo "Vidurine reiksme yra: $meh </br>";
    
    // 4.
    echo "4. Uzduotis: </br>";
    $kr1 = rand(1,10);
    $kr2 = rand(1,10);
    $kr3 = rand(1,10);
    $ats = (($kr1 < $kr2 + $kr3) && ($kr2 < $kr1 + $kr3) && ($kr3 < $kr1 + $kr2)) ? "galite" : "negalite";
    echo "Jus $ats sudaryti trikampio is reiksmiu: $kr1 $kr2 $kr3 </br>";

    // 5.
    echo "5. Uzduotis: </br>";
    $k1 = rand(0,2);
    $k2 = rand(0,2);
    $k3 = rand(0,2);
    $k4 = rand(0,2);
    $nuliai = ($k1 == 0) + ($k2 == 0) + ($k3 == 0) + ($k4 == 0);
    $vienetai = ($k1 == 1) + ($k2 == 1) + ($k3 == 1) + ($k4 == 1);
    $dvejetai = ($k1 == 2) + ($k2 == 2) + ($k3 == 2) + ($k4 == 2);
    echo "Tarp kintamųjų yra: $nuliai nuliu, $vienetai vienetu ir $dvejetai dvejetu. </br>";

    // 6.
    echo "6. Uzduotis: </br>";
    $tagas = rand(1,6);
    echo "<h{$tagas}>{$tagas}</h{$tagas}> </br>";

    // 7.
    echo "7. Uzduotis: </br>";
    $spalva1 = rand(-10,10);
    $spalva11 = $spalva1 < 0 ? 'green' : ($spalva1 > 0 ? 'blue' : 'red');
    $spalva2 = rand(-10,10);
    $spalva22 = $spalva2 < 0 ? 'green' : ($spalva2 > 0 ? 'blue' : 'red');
    $spalva3 = rand(-10,10);
    $spalva33 = $spalva3 < 0 ? 'green' : ($spalva3 > 0 ? 'blue' : 'red');
    echo "<p style=\"color: {$spalva11}\">{$spalva1}</p><p style=\"color: {$spalva22}\">{$spalva2}</p><p style=\"color: {$spalva33}\">{$spalva3}</p> </br>";

    // 8.
    echo "8. Uzduotis: </br>";
    $zvakes = rand(5,3000);
    $kaina = $zvakes < 1001 ? $zvakes : ($zvakes < 2001 ? $zvakes*0.97 : $zvakes*0.96);
    echo "Jus perkate $zvakes vnt. zvakiu uz kaina: $kaina EUR </br>";

    // 9.
    echo "9. Uzduotis: </br>";
    $l1 = rand(0,100);
    $l2 = rand(0,100);
    $l3 = rand(0,100);
    $count = 3;
    $vid = round(($l1+$l2+$l3)/$count);
    echo "Skaiciu: $l1 $l2 $l3 vidurkis: $vid </br>";
    if($l1 < 10 || $l1 > 90){
        $l1 = Null;
        $count--;
    }
    if($l2 < 10 || $l2 > 90){
        $l2 = Null;
        $count--;
    }
    if($l3 < 10 || $l3 > 90){
        $l3 = Null;
        $count--;
    }
    $vid2 = $count == 0 ? "Negalima dalyba is nulio" : round(($l1+$l2+$l3)/$count);
    echo "Skaiciu: $l1 $l2 $l3 vidurkis: $vid2 </br>";

    // 10.
    echo "10. Uzduotis: </br>";
    $hour = rand(0,23);
    $min = rand(0,59);
    $sec = rand(0,59);
    $vHour = $hour < 10 ? "0{$hour}" : $hour;
    $vMin = $min < 10 ? "0{$min}" : $min;
    $vSec = $sec < 10 ? "0{$sec}" : $sec;
    $rSec = rand(0,300);
    echo "Laikrodis1: {$vHour}:{$vMin}:{$vSec} </br>";
    echo "Pridedame $rSec sekundziu ir gauname: </br>";
    $sec = $sec + $rSec;
    $min = $min + floor($sec/60);
    $sec = $sec%60;
    $hour = $hour + floor($min/60);
    $min = $min%60;
    $hour = $hour%24;
    $vHour = $hour < 10 ? "0{$hour}" : $hour;
    $vMin = $min < 10 ? "0{$min}" : $min;
    $vSec = $sec < 10 ? "0{$sec}" : $sec;
    echo "Laikrodis2: {$vHour}:{$vMin}:{$vSec} </br>";

    // 11.
    echo "11. Uzduotis: </br>";
    $a1 = rand(1000,9999);
    $a2 = rand(1000,9999);
    $a3 = rand(1000,9999);
    $a4 = rand(1000,9999);
    $a5 = rand(1000,9999);
    $a6 = rand(1000,9999);
    echo "values unsorted: $a1, $a2, $a3, $a4, $a5, $a6 </br>";
    $sorted = "";
    // 1st value
    $amin = min($a1, $a2, $a3, $a4, $a5, $a6);
    $variableName = array_search($amin, compact('a1', 'a2', 'a3', 'a4', 'a5', 'a6'));
    $sorted = $sorted."{$$variableName} ";
    $$variableName = 500000;
    // 2nd value
    $amin = min($a1, $a2, $a3, $a4, $a5, $a6);
    $variableName = array_search($amin, compact('a1', 'a2', 'a3', 'a4', 'a5', 'a6'));
    $sorted = $sorted."{$$variableName} ";
    $$variableName = 500000;
    // 3rd value
    $amin = min($a1, $a2, $a3, $a4, $a5, $a6);
    $variableName = array_search($amin, compact('a1', 'a2', 'a3', 'a4', 'a5', 'a6'));
    $sorted = $sorted."{$$variableName} ";
    $$variableName = 500000;
    // 4th value
    $amin = min($a1, $a2, $a3, $a4, $a5, $a6);
    $variableName = array_search($amin, compact('a1', 'a2', 'a3', 'a4', 'a5', 'a6'));
    $sorted = $sorted."{$$variableName} ";
    $$variableName = 500000;
    // 5th value
    $amin = min($a1, $a2, $a3, $a4, $a5, $a6);
    $variableName = array_search($amin, compact('a1', 'a2', 'a3', 'a4', 'a5', 'a6'));
    $sorted = $sorted."{$$variableName} ";
    $$variableName = 500000;
    // 6th value
    $amin = min($a1, $a2, $a3, $a4, $a5, $a6);
    $variableName = array_search($amin, compact('a1', 'a2', 'a3', 'a4', 'a5', 'a6'));
    $sorted = $sorted."{$$variableName} ";
    $$variableName = 500000;

    echo "Sorted array: </br>";
    print_r($sorted);
    echo "</br> Variables after sorting: </br>";
    echo "values unsorted: $a1, $a2, $a3, $a4, $a5, $a6 </br>";
?>
</body>
</head>