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
    $actorName = "Silvester";
    $actorSurname = "Stalone";
    echo "The shorter one is: ".(strlen($actorName)<strlen($actorSurname)?($actorName):($actorSurname)).". </br>";

    // 2.
    echo "2. Uzduotis. </br>";
    echo strtoupper($actorName)." ".strtolower($actorSurname).". </br>";

    // 3.
    echo "3. Uzduotis. </br>";
    $aa = $actorName[0].$actorSurname[0];
    echo $aa."</br>";

    // 4.
    echo "4. Uzduotis. </br>";
    $bb = substr($actorName, -3, 3).substr($actorSurname, -3, 3);
    echo $bb."</br>";
    
    // 5.
    echo "5. Uzduotis. </br>";
    $bowie = "An American in Paris";
    $reg = '/[Aa]/';
    echo preg_replace($reg, '*', $bowie)."</br>";
    
    // 6.
    echo "6. Uzduotis. </br>";
    $maz = substr_count($bowie, "a");
    $did = substr_count($bowie, "A");
    echo "There are $did A's, and $maz a's, in $bowie </br>";
    
    // 7.
    echo "7. Uzduotis. </br>";
    $reg2 = '/[AEIYOUaeiyou]/';
    $str3 = "Breakfast at Tiffany's";
    $str4 = "2001: A Space Odyssey";
    $str5 = "It's a Wonderful Life";
    echo preg_replace($reg2, "", $bowie)."</br>";
    echo preg_replace($reg2, "", $str3)."</br>";
    echo preg_replace($reg2, "", $str4)."</br>";
    echo preg_replace($reg2, "", $str5)."</br>";

    // 8.
    echo "8. Uzduotis. </br>";
    $kodas = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    $matches = [];
    preg_match("/[0-9]/", $kodas, $matches);
    echo "$kodas </br>";
    echo "Episode is: {$matches[0]}. </br>";

    // 9.
    echo "9. Uzduotis. </br>";
    $movie = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    $movie2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
    $wordCount = preg_match_all('/\b\w{1,5}\b/', $movie);
    $wordCount2 = preg_match_all('/\b\w{1,5}\b/', $movie2);
    echo "Number of words with 5 or fewer letters: $wordCount in the text: $movie</br>";
    echo "Number of words with 5 or fewer letters: $wordCount in the text: $movie2</br>";

    // 10.
    echo "10. Uzduotis. </br>";
    $t1 = chr(rand(97,122));
    $t2 = chr(rand(97,122));
    $t3 = chr(rand(97,122));
    $randWord = "$t1$t2$t3";
    echo "the random 3 letter word is: $randWord </br>";

    // 11.
    echo "11. Uzduotis. </br>";
    $strArr = explode(" ", $movie." ".$movie2);
    shuffle($strArr);
    $output = join(" ", array_slice($strArr, 0, 10));
    echo $output;
    echo "</br>";
     
?>
</body>
</head>