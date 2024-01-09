<?php

echo "1. Uzduotis. </br>";
function heading1($text, $heading = 1){
    return "<h$heading>$text</h$heading>";
}
echo heading1("IDETA I &lth1&gt taga");
echo "</br>";


echo "2. Uzduotis. </br>";
echo heading1("IDETA I &lth3&gt taga", 3);
echo "</br>";


echo "3. Uzduotis. </br>";
function nums($a)
{
    return is_numeric($a);
}
$chars = join("",array_filter(str_split(md5(time())), 'nums'));;
echo heading1($chars)."</br>";

echo "4. Uzduotis. </br>";
function divisors(int $num){
    $divCount = 0;
    if($num < 3){
        return 0;
    } 
    for($i = 2; $i < $num; $i++){
        if($num%$i == 0){
            $divCount++;
        }
    }
    return $divCount;
}

echo divisors(60)."</br>";

echo "5. Uzduotis. </br>";

function rnd($a){
    return rand(33,77);
}
function rnd2($a){
    return rand(333,777);
}
function cmpmod($a, $b){
    return divisors($b) <=> divisors($a);
}
function cmpmod2($a){
    return divisors($a) != 0;
}

$meh = array_map('rnd', array_fill(0, 100, null));
usort($meh, 'cmpmod');
print_r($meh);
echo "</br>";

echo "6. Uzduotis. </br>";

$meh2 = array_map('rnd2', array_fill(0, 100, null));
$meh2 = array_filter($meh2, 'cmpmod2');
print_r($meh2);
echo "</br>";

echo "7. Uzduotis. </br>";
$rndNum = rand(10,20);
$meh3 = array_map()


?>    


7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, 
elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, 
kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. 
Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

     
8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.

     
9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. 
Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar 
vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. 
Kartokite, kol sąlyga nereikalaus pridėti elemento. 

     
10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, 
kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo 
(ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) 
ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 

