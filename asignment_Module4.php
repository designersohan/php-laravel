<?php 
// Answer to the question no. 1

function stringSortByLength(array $strings): array {
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $strings;
}

$strings = array("Blue", "Red", "Yellow", "Violate", "Magenta");
$sortedStrings = stringSortByLength($strings);

print_r($sortedStrings);

echo PHP_EOL;
echo PHP_EOL;

// Answer to the question no. 2

function concatenate2Strings(string $string1, string $string2): string {
    $string2Length = strlen($string2);
    if ($string2Length > strlen($string1)) {
        return $string2 . $string1;
    } else {
        $substring = substr($string1, -$string2Length);
        return $substring . $string2 . substr($string1, 0, -$string2Length);
    }
}

$string1 = "Hello";
$string2 = "World";
$result = concatenate2Strings($string1, $string2);
echo $result;

echo PHP_EOL;
echo PHP_EOL;

// Answer to the question no. 3

function removedElement(array $arr): array {
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$arr = array("Apple", "Banana", "Orange", "Grapes", "Dates", "Cherry");
$newArr = removedElement($arr);
print_r($newArr);

echo PHP_EOL;
echo PHP_EOL;

// Answer to the question no. 4

function lettersWhitespaceString(string $str): bool {
    return preg_match('/^[a-zA-Z\s]+$/', $str) === 1;
}

$str1 = "This is a string with spaces";
$str2 = "This is a string with numbers 123";

$isLettersWhitespaceString1 = lettersWhitespaceString($str1);
$isLettersWhitespaceString2 = lettersWhitespaceString($str2);

echo $isLettersWhitespaceString1 ? "This String no. 1 contains only letters and whitespace" : "This String no. 1 contains no letter or no whitespace characters only";

echo "\n";

echo $isLettersWhitespaceString2 ? "This String no. 2 contains only letters and whitespace" : "This String no. 2 contains no letter or no whitespace characters only";

echo PHP_EOL;
echo PHP_EOL;

// Answer to the question no. 5

function findSecondLargest(array $arr): ?float {
    $largestOne = null;
    $largestTwo = null;
    foreach ($arr as $num) {
        if ($largestOne === null || $num > $largestOne) {
            $largestTwo = $largestOne;
            $largestOne = $num;
        } elseif ($largestTwo === null || $num > $largestTwo) {
            $largestTwo = $num;
        }
    }
    return $largestTwo;
}

$arr = array(9, 17, 2, 25, 33);
$secondLargest = findSecondLargest($arr);
echo "The second largest number is: " . ($secondLargest ?? "none");
