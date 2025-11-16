<?php 
    // exercise 1 
    $number = 10;
    if ($number % 2 == 0) {
        echo "angka genap </br>";
    } else {
        echo "angka ganjil </br>";
    }

    //exercise 2
    $age = 18;
    if ($age >= 18) {
        echo "dewasa </br>";
    } else {
        echo "remaja </br>";
    }

    //exercise 3
    $total = 120000;
    $discount = "50%"; 

    if ($total >= 120000) {
        echo "congrats, you get discount =  $discount </br>";
    } else {
        echo "your total shop is = $total </br>";
    }


    //exercise 4
    $value = 85;

    if ($value >= 90) {
        echo "your grade is A </br>";
    } else if ($value >= 80) {
        echo "your grade is B </br>";
    } else if ($value >= 70) {
        echo "your grade is C </br>";
    } else if ($value >= 60) {
        echo "your grade is D </br>";
    } else {
        echo "your grade is E </br>";
    }

    //exercise 5
     $weather = 35;

     if ($weather > 35) {
        echo "weather is hot";
     } else if ($weather >= 25 || $weather >=34) {
        echo "weather is normal";
     } else if ($weather < 25) { 
        echo "weather is cool";
     }

?>