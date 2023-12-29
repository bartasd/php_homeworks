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
    foreach (range(0, 29) as $value) {
        $ar[$value] = rand(5,25);
    }
    print_r($ar);
    echo "</br>";

    // 2. 
    echo "2. Uzduotis. </br>";  
 
    $indexArr = null;
    $biggestValue = 0; 
    $countBigger10 = 0;
    $evenSum = 0;
    foreach ($ar as $index=>$value) {
        if($value > 10)
            $countBigger10++;
        if($value > $biggestValue){
            $indexArr = array();
            $indexArr[] = $index;
            $biggestValue = $value;
        }
        elseif($value == $biggestValue){
            $indexArr[] = $index;
        }
        if($index%2 == 0){
            $evenSum += $value;
        }
    }
    echo "2a. Uzduotis. </br>";
    echo "Masyve yra $countBigger10 reiksmiu didesniu uz 10. </br>";

    echo "2b. Uzduotis. </br>";
    echo "Didziausia reiksme masyve yra $biggestValue. </br>";
    echo "Didziausios reiksmes-iu indeksas-ai yra: </br>";
    print_r($indexArr);
    echo "</br>";

    echo "2c. Uzduotis. </br>";
    echo "Lyginiu indexu reiksmiu suma lygi: $evenSum </br>";

    echo "2d. Uzduotis. </br>";
    function subtractIndex($value, $index)
    {
        return $value - $index;
    }
    $newArr = array_map('subtractIndex', $ar, array_keys($ar));
    echo "Naujo masyvo reiksmes: </br>";
    print_r($newArr);
    echo "</br>";

    echo "2e. Uzduotis. </br>";
    for($i = 0; $i < 10; $i++){
        $newArr[] = rand(5,25);
    }
    echo "Papildyto masyvo reiksmes: </br>";
    print_r($newArr);
    echo "</br>";

    echo "2f. Uzduotis. </br>";
    $poriniai = [];
    $neporiniai = [];

    forEach($newArr as $key=>$value){
        if($key%2 == 0)
            $poriniai[] = $value;
        else
            $neporiniai[] = $value;
    }
    echo "Poriniu indexu masyvas: </br>";
    print_r($poriniai);
    echo "</br>";
    echo "Neporiniu indexu masyvas: </br>";
    print_r($neporiniai);
    echo "</br>";

    echo "2g. Uzduotis. </br>";
    forEach($poriniai as &$value){
        if($value > 15)
            $value = 0;
    }
    print_r($poriniai);
    echo "</br>";

    echo "2h. Uzduotis. </br>";
    $idx = null;
    forEach($poriniai as $index=>$value){
        if($value > 10){
            $idx = $index;
            break; 
        }
    }
    echo "Maziausias index kurio elementas yra < 10 : $idx .</br>";

    echo "2i. Uzduotis. </br>";
    unset($poriniai);

    echo "3. Uzduotis. </br>";
    $raides = [];
    $as = 0;
    $bs = 0;
    $cs = 0;
    $ds = 0;
    for($i=0; $i < 200; $i++){
        $meh = rand(0,3);
        if($meh == 0){
            $as++;
            $raides[] = "A";
        }
        elseif($meh == 1){
            $bs++;
            $raides[] = "B";
        }
        elseif($meh == 2){
            $cs++;
            $raides[] = "C";
        }
        else{
            $ds++;
            $raides[] = "D";
        }
    }
    unset($i);
    print_r($raides);
    echo "</br>";
    echo "There are $as A, $bs B, $cs C and $ds D in an array.</br>";

    echo "4. Uzduotis. </br>";
    function cmp($a, $b){
        return $a <=> $b;
    }
    function cmp2($a, $b){
        return $b <=> $a;
    }
    usort($raides, 'cmp');
    echo "Sortiruotas raidziu masyvas:</br>";
    print_r($raides);
    echo "</br>";

    echo "5. Uzduotis. </br>";

    shuffle($raides);
    $a1 = $raides;
    shuffle($raides);
    $a2 = $raides;
    shuffle($raides);
    $a3 = $raides;
    $a123 = [];
    for($i = 0; $i < 200; $i++){
        $a123[] = $a1[$i].$a2[$i].$a3[$i];
    }
    unset($i);
    usort($a123, 'cmp');

    $temp = $a123[0];
    $nesikartojancios = 0;
    $unikalios = 0;
    $kartojasi = 1;
    
    for($i = 1; $i < 200; $i++){
        if($a123[$i] == $a123[$i-1]){
            $kartojasi++;
        }
        else{
            if($kartojasi == 1)
                $nesikartojancios++;
            else{
                $unikalios++;
            }
        }
    }
    print_r($a123);
    echo "</br>";
    echo "Masyve yra $nesikartojancios nesikartojanciu reiksmiu ir $unikalios unikaliu kombinaciju. </br>";

    echo "6. Uzduotis. </br>";

    $masyvasA = [];
    $masyvasB = [];
    while(count($masyvasA) != 100 || count($masyvasB) != 100){
        $temp = rand(100,999);
        if(count($masyvasA) != 100 && !in_array($temp, $masyvasA)){
            $masyvasA[] = $temp;
        }
        $temp = rand(100,999);
        if(count($masyvasB) != 100 && !in_array($temp, $masyvasB)){
            $masyvasB[] = $temp;
        }
    }
    echo "Masyvas A: </br>";
    print_r($masyvasA);
    echo "</br>";
    echo "Masyvas B: </br>";
    print_r($masyvasB);
    echo "</br>";

    echo "7. Uzduotis. </br>";
    $masyvasC = [];
    $masyvasD = [];
    $masyvasE = [];
    for($i = 0; $i < 100; $i++){
        if(!(in_array($masyvasA[$i], $masyvasB)))
            $masyvasC[] = $masyvasA[$i];
        else{
            $masyvasD[] = $masyvasA[$i];
        }
        $masyvasE[$masyvasA[$i]] = $masyvasB[$i];
    }
    echo "Masyvas C: </br>";
    print_r($masyvasC);
    echo "</br>";

    echo "8. Uzduotis. </br>";
    print_r($masyvasD);
    echo "</br>";

    echo "9. Uzduotis. </br>";
    print_r($masyvasE);
    echo "</br>";

    echo "10. Uzduotis. </br>";
    $masyvas10 = [];
    $masyvas10[] = rand(5,25);
    $masyvas10[] = rand(5,25);
    for($i = 2; $i < 10; $i++){
        $masyvas10[] = $masyvas10[$i-2] + $masyvas10[$i-1];
    }
    print_r($masyvas10);
    echo "</br>";

    echo "11. Uzduotis. </br>";
    $masyvas101 = [];
    for($i = 0; $i < 101; $i++){
        $masyvas101[] = rand(0,300);
    }

    function isUnique($array) {
        $countedValues = array_count_values($array);
        foreach ($countedValues as $count) {
            if ($count !== 1) {
                return false;
            }
        }
        return true;
    }
    while(!isUnique($masyvas101)){
        $countedValues = array_count_values($masyvas101);
        $i = 0;
        while(true){
            if($countedValues[$masyvas101[$i]] != 1){
                $masyvas101[$i] = rand(0,300);
                $i = 0;
                break;
            }
            $i++;
        }   
    }
    print_r($masyvas101);
    echo "</br>";

    $masyvasSorted = $masyvas101;
    usort($masyvasSorted, 'cmp2');
    $eglute = [];
    $eglute[50] = $masyvasSorted[$i];
    $dalis1 = 0;
    $dalis2 = 0;
    for($i = 1; $i < 100; $i += 2){
        $x = ($i+1)/2;
        $eglute[50-$x] = $masyvasSorted[$i];
        $eglute[50+$x] = $masyvasSorted[$i+1];
        $dalis1 += $eglute[50-$x];
        $dalis2 += $eglute[50+$x];
    }
    $masyvas101 = $eglute;
    print_r($masyvas101);
    echo "</br>";
    echo "Suma 1: $dalis1 </br>";
    echo "Suma 2: $dalis2 </br>";



    ?>
</body>
</head>

    11.   
    Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. 
    Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. 
    Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, 
    o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 
    Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). 

    Neatlikta:
    Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. 
    (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)
