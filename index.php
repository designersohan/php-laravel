<?php

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