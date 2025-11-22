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
    for ($i = 1; $i <= 5; $i++) {
        $row = ""; // Reset row after each outer loop iteration
        for ($j = 1; $j <= $i; $j++) {
            $row .= "*";
        }

        echo $row . "</br>";
    }


?>