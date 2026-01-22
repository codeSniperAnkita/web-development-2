<!DOCTYPE html>
<html>
<head>
    <title>Swapping Numbers</title>
</head>
<body>
<?php
$a = 10;
$b = 20;

echo "Before Swapping:<br>";
echo "a = $a , b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "After Swapping:<br>";
echo "a = $a , b = $b";
?>
</body>
</html>
