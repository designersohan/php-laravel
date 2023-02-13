<?php

// The solution for the question no. 1

function checkEvenOrOdd($number){
    if ($number % 2 == 0){
        echo "This number is Even";
    }
    else{
        echo "This number is Odd";
    }
}

$number = 8;
echo checkEvenOrOdd($number);

// The solution for the question no. 2

$sum = 0;

for ($nmuber = 1; $number <= 100; $number++) {
    $sum += $number;
}
echo "The sum of the series is: $sum";
