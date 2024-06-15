<?php 

$result = 88;

switch ($result) {
   case 75:
    echo "Your grade is A \n";
    break;
    case 85:
        echo "Your grade is A+ \n";
        break;
    case 88: 
        echo "Your grade is A+ \n";
        break;
    case 32:
        echo "Your grade is F \n";
        break;
    default: 
        echo "Invalid grade \n";
        
}

$favcolor = "Yellow";

switch ($favcolor) {
    case "Red":
        echo "Your favorite color is " . $favcolor;
        break;
    case "Yellow": 
        echo "Your favorite color is " . $favcolor;
        break;
    case "Green": 
        echo "Your favorite color is " . $favcolor;
        break;
    default:
        echo "Your favorite color is neither red, yellow, nor green";
}
