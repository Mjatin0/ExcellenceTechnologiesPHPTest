<!DOCTYPE html>
<html>
<body>
<?php
//Initialize array
$arr = array(1, 2, 3, 4, 5);
$sum = 0;

//Loop through the array to calculate sum of elements
for ($i = 0; $i < $arr.length; $i++) {
   $sum = $sum + $arr[$i];
}
print("Sum of all the elements of an array: " . $sum);
?>
</body>
</html>