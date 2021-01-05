<!DOCTYPE html>
<html>
<body>
<?php
function printPairs($arr, $n, $sum)
{
    // Initialize 
    $count = 0; 
 
    /* Consider all possible 
    pairs and check their sums */
    for ($i = 0; $i < $n; $i++)
        for ( $j = $i + 1; $j < $n; $j++)
            if ($arr[$i] + $arr[$j] == $sum)
                echo "(", $arr[$i], ", ",
                           $arr[$j], ")", "\n";
}
 
// Driver
$arr = array (1, 5, 7, -1, 5);
$n = sizeof($arr);
$sum = 6;
printPairs($arr, $n, $sum);
?>
</body>
</html>