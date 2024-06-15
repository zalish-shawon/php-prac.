<?php 

$number = 1; // initialize loop will start here

while ($number <= 10) {
    echo "$number \n";
    $number++;
}

?>



<?php 

// while loop will break statement

$number = 1;

while ($number <= 10) {
    if ($number === 5) {
        break;
    }
    echo "$number \n";
    $number++;
}

?>

