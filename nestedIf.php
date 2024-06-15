<?php 

$number = 85;

if ($number < 90) {
    echo "$number is less than 90\n";
    if ($number < 65) {
        echo "$number is less than 65\n";
    } else {
        echo "$number is greater than 65\n";
    }
}