<!-- <!DOCTYPE HTML>
<html>
<body>
    <h1>My First PHP Page</h1>
    
    </body>
    </html>
         -->

<!DOCTYPE HTML>
<html>
<body>
<h1>My First PHP Page</h1>

<?php
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Rectangle Area is: $area <br>";
echo "Rectangle Perimeter is: $perimeter <br><br>";

$amount = 200;
$vat = $amount * 0.15;

echo "Amount = $amount <br>";
echo "VAT (15%) = $vat <br><br>";

$number = 7;
if($number % 2 == 0){
  echo "$number is Even Number <br><br>";
}
else{
  echo "$number is Odd Number <br><br>";
}

$num1 = 15;
$num2 = 42;
$num3 = 28;

if($num1 >= $num2 && $num1 >= $num3){
  echo "The largest number is $num1 <br><br>";
}
elseif($num2 >= $num1 && $num2 >= $num3){
  echo "The largest number is $num2 <br><br>";
}
else{
  echo "The largest number is $num3 <br><br>";
}

echo "Odd numbers between 10 to 100:<br>";
for($i = 10; $i <= 100; $i++){
  if($i % 2 != 0){
    echo "$i ";
  }
}
echo "<br><br>";

$numbers = [12, 25, 37, 42, 59];
$search = 37;
$found = false;

for($i = 0; $i < count($numbers); $i++){
  if($numbers[$i] == $search){
    $found = true;
    break;
  }
}

if($found){
  echo "Element $search is found in the array.<br><br>";
}
else{
  echo "Element $search is not found in the array.<br><br>";
}

echo "Shape 1:<br>";
for($i = 1; $i <= 3; $i++){
  for($j = 1; $j <= $i; $j++){
    echo "* ";
  }
  echo "<br>";
}
echo "<br>";

echo "Shape 2:<br>";
for($i = 3; $i >= 1; $i--){
  for($j = 1; $j <= $i; $j++){
    echo "$j ";
  }
  echo "<br>";
}
echo "<br>";

echo "Shape 3:<br>";
$char = 'A';
for($i = 1; $i <= 3; $i++){
  for($j = 1; $j <= $i; $j++){
    echo "$char ";
    $char++;
  }
  echo "<br>";
}

?>

</body>
</html>