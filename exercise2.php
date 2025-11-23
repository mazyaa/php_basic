<?php 

    $flip_triangle = 5;

    for ($o = $flip_triangle; $o >= 1; $o--) { 
        for ($p = 1; $p <= $flip_triangle - $o; $p++) { 
            echo " ";
        }
        
        for ($q = 1; $q <= ($o * 2) - 1; $q++) {  
            echo "*";
        }

        echo "\n";
    }