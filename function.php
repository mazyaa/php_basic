<?php

    $scoreExercise = 90;
    $scoreUTS = 85;
    $scoreUAS = 80;

    function score($scoreExercise, $scoreUTS, $scoreUAS ) {
        return (($scoreExercise * 0.3) + ($scoreUTS * 0.3) + ($scoreUAS * 0.4));
    };

    function gradeScore($score) {
         if ($score >= 80) {
            return 'A';
        } else if ($score >= 70) {
            return 'B';
        } else {
            return 'C';
        }
    }

    function statusGraduate($score) {
        if (gradeScore($score) === 'A') {
            return 'PASSED!';
        } else {
            return 'NOT PASSED!';
        }
    }

    function display($finalScore, $finalGrade, $finalStatus) {
        echo "Get final score". $finalScore . PHP_EOL;
        echo "Get grade Score". $finalGrade . PHP_EOL;
        echo "Get Status graduate", $finalStatus . PHP_EOL;
    }

    $finalScore = score($scoreExercise, $scoreUTS, $scoreUAS);
    $finalGrade = gradeScore($finalScore);
    $finalStatus = statusGraduate($finalScore);

    $output = display($finalScore, $finalGrade, $finalStatus);

    echo $output;
?>