<?php 

    // while loop statement
        // $i = 1;
        // while ($i < 6) {
        //     echo $i . "</br>";
        //     $i++;
        // }

        // $i = 1;
        // while ($i < 10) {
        //     if ($i == 3) break; // use break for end looping statement
        //     echo $i;
        //     $i++;
        // }

        // $i = 0;
        // while ($i < 10) {
        //     $i++;
        //     if ($i == 5) continue; // use continue if $i == 5 then jump to 6, so 5 will not print
        //     echo $i;
        // }

        // $i = 0;
        // while ($i < 100) {
        //     $i += 10;
        //     echo $i . "</br>";
        // }

    // do while statement

        // $i = 5;
        // do {
        //     $i++;
        //     echo $i;
        // } while ($i < 5); // result in print is 6 because it will increment and print first before check condition

    //for loop statement
    /**
     * for (expression1, expression2, expression3) {
     *    // code block
     *} 
     */
    
    /**expression1 is evaluated once
    expression2 is evaluated before each iteration
    expression3 is evaluated after each iteration
 */

    // for ($i=0; $i <= 10; $i++) {
    //     if ($i == 5) break;
    //     echo $i;
    // }

    //nested loop
    // for ($i = 1; $i < 5; $i++) {
    //     $row = ""; // Reset row after each outer loop iteration
    //     for ($j = 1; $j <= $i; $j++) {
    //         $row .= "1";
    //     }

    //     echo $row . "</br>";
    // }

    // for ($k = 5; $k >= 1; $k--) {
    //     $row2 = "";
    //     for ($l = 1; $l <= 1; $l++ ) {
    //         $row2 .= "*";
    //     }
    //     echo $row2 . "</br>";
    // }

    // for ($a = 1; $a <= 10; $a++) {
    //     for ($b = 1; $b < $a; $b++) {
    //         echo "*";
    //     }
    //     // echo "</br>";
    //     echo "\n";
    // }

    // for ($i = 1; $i <= 10; $i++) { // for print column
    //     for ($j = 10; $j >= $i; $j--) { // for print row
    //         echo "*"; // print row with value *
    //     } // if $j >= $i == false then break and reset value

    //     // echo "</br>"; // print column

    //     echo "\n";

    //     // for debug (column 1)
    //     // $i = 1 (column) (5 >=1) ? if true print, and 5-1, 
    //     // *
    //     // $i = 1 (column) (4 >=1) ? if true print, and 4-1,
    //     // **
    //     // $i = 1 (column) (3 >=1) ? if true print, and 3-1,
    //     // ***
    //     // $i = 1 (column) (2 >=1?) if true print, and 2-1,
    //     // ****
    //     // $i = 1 (column) (1 >=1?) if true print, and 1-1,
    //     // *****
    //     // $i = 1 (column) (0 >=1?) if true print, (false)
    //     // break and reset value $j = 5

    //     // for debug (column 2)
    //     // $i = 2 (column) (5 >= 2) ? if true print, and 5-1, 
    //     // *
    //     // $i = 2 (column) (4 >= 2) ? if true print, and 4-1,
    //     // **
    //     // $i = 2 (column) (3 >= 2) ? if true print, and 3-1,
    //     // ***
    //     // $i = 2 (column) (2 >= 2?) if true print, and 2-1,
    //     // ****
    //     // $i = 2 (column) (1 >= 2?) if true print, and 1-1,
    //     // break and reset value $j = 5

    //     // etc.
    // }

    // echo "</br>";

    for ($k = 1; $k <= 5; $k++) {
        for ($l = 1; $l < $k; $l++) {
            echo " ";
        }
        for ($m = 5; $m >= $k; $m--) {
            echo "*";
        }

        echo "\n";

    }

    echo "\n";


    $height_triangle = 3;
    
    for ($k = 1; $k <= $height_triangle; $k++) { 
        for ($l = $height_triangle; $l > $k; $l--) {  // 1 (" ", " "), 2 (" "), 3 (not space)
            echo "-";
        }
        for ($m = 1; $m <= ($k * 2 - 1); $m++) { // 1 *, 2 ***, 3 *****
            echo "*";
        }

        echo "\n";
    }

        echo "\n";

    for ($u = 1; $u <= 5; $u++) {
        for ($v = 1; $v <= $u; $v++) {
            echo $v;
        }

        echo "\n";
    }
    
    echo "\n";

    $length = 1;
    for ($x = 1; $x <= $length; $x++) {
        for ($y = 1; $y <= $length; $y++) {
            echo "*";
        }

        echo "\n";
    }

    echo "\n";
    
    $flip_triangle = 3;

    for ($o = 1; $o <= $flip_triangle; $o++) { 
        for ($p = $flip_triangle; $p > $o; $p--) {  // 1 (" ", " "), 2 (" "), 3 (not space)
            echo "-";
        }
        
        for ($q = 1; $q <= ($k * 2 - 1); $q++) { // 1 *, 2 ***, 3 *****
            echo "*";
        }

        echo "\n";
    }



?>