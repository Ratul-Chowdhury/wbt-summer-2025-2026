
<?php

echo "<h3>1. Simple Interest Calculation</h3>";

$principal = 1000;
$rate = 5;
$time = 2;

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal: $principal<br>";
echo "Rate: $rate%<br>";
echo "Time: $time years<br>";
echo "Simple Interest = $simpleInterest<br><br>";


echo "<h3>2. Prime Number Check</h3>";

$numToCheck = 7;
$isPrime = true;

if ($numToCheck <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $numToCheck; $i++) {
        if ($numToCheck % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime == true) {
    echo "$numToCheck is a Prime Number.<br><br>";
} else {
    echo "$numToCheck is NOT a Prime Number.<br><br>";
}


echo "<h3>3. Factorial Calculation</h3>";

$numForFactorial = 5;
$factorial = 1;

for ($i = 1; $i <= $numForFactorial; $i++) {
    $factorial = $factorial * $i;
}

echo "Factorial of $numForFactorial is: $factorial<br><br>";


echo "<h3>4. Sum and Average of Array Elements</h3>";

$numbers = array(10, 20, 30, 40, 50);
$sum = 0;
$totalElements = count($numbers);

for ($i = 0; $i < $totalElements; $i++) {
    $sum = $sum + $numbers[$i];
}

$average = $sum / $totalElements;

$numbersList = implode(", ", $numbers);
echo "Array elements: $numbersList<br>";
echo "Sum = $sum<br>";
echo "Average = $average<br><br>";


echo "<h3>5. Pattern Printing</h3>";

$rows = 4;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo "<br>";
}

?>