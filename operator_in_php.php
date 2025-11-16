<?php 
    $a = 120;
    $b = 12;


    // aritmetic operator
    echo $a + $b . "</br>";  // for increment number (and use . and "</br>)" to break line)
    echo $a - $b . "</br>";
    echo $a * $b . "</br>";
    echo $a / $b . "</br>";
    echo $a % $b . "</br>"; // modulus (result of division's remainder) ex: 10 % 3 = 1 (because 10/3 = 3 remainder 1)

    // comparison operator
    
    // use var_dump for represent boolean result ex bool(true) or bool(false)
    var_dump($a == $b) . "</br>"; // use == to check value only ex (12 == "12" is true)
    var_dump($a === $b) . "</br>"; // use === to check value and type ex (12 === "12" is false)
    var_dump($a != $b) . "</br>"; // use != to check value not equal ex (12 != "12" is false)
    var_dump($a !== $b) . "</br>"; // use !== to check value and type not equal ex (12 !== "12" is true)
    
    if ($a > $b) {
        echo "$a is greather than $b </br>";
    } else if ($a !== $b) {
        echo "$a is not equal to $b </br>";
    } else if ($a === $b) {
        echo "$a is equal to $b </br>";
    } else if ($a <= $b) {
        echo "$a is less than or equal to $b </br>";
    } else if ($a >= $b) {
        echo "$a is greater than or equal to $b </br>";
    } else {
        echo "$a is less than $b </br>";
    }

    // logic operator
    // && = must true both condition
    // || = true if one of the condition is true
    $username = "admin";
    $password  = "admin123";

    if ($username == "admin" && $password == "admin123") {
        echo "heello $username, welcome back! </br>";
    } else {
         echo "username or password is incorrect </br>";
    }




    $height = 170;
    $weight = 60;
    $age = 22;

    if ($height >= 170 || $weight >= 70) { // true because height is true
        echo "yeahh, true </br>";
    } else {
        echo "sorry, false</br>";
    }

    //nested if 
    if ($height >= 170 && $weight >= 70 ) { // the result is verry sorry because $height is true and $weight is false
        if ($age == 22) {
            echo "congrats, you is verry handsome </br>";
        } else {
            echo "sorry </br>";
        }
    } else {
        echo "verry sorry </br>";
    }

    if ($height >= 170 || $weight >= 70 ) { // the result is congrats, you is verry handsome because one condition is true
        if ($age == 22) {
            echo "congrats, you is verry handsome </br>";
        } else {
            echo "sorry </br>";
        }
    } else {
        echo "verry sorry </br>";
    }

    // $cars = array("avanza", "xenia", "innova");
    // var_dump($cars[1] == "xenia");


    // $value = 100;
    // $dicipline = 80;
    
    // if ($value >= 100) {
    //     echo "tust";
    //     if ($dicipline >= 80) {
    //         echo "tesst";
    //     }
    // } else {
    //     echo "brok";
    // }
    

    


?>