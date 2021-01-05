<!DOCTYPE html>
<html>
<body>
<?php   
function printRepeatingNum($arr, $size) 
{ 
    $i; 
    $j; 
    echo " Repeating elements are "; 
  
    for($i = 0; $i < $size; $i++) 
        for($j = $i + 1; $j < $size; $j++) 
            if($arr[$i] == $arr[$j]) 
                echo $arr[$i], " "; 
}  
  
// Driver Code 
$arr = array(4, 2, 4, 5, 2, 3, 1); 
$arr_size = sizeof($arr, 0); 
printRepeatingNum($arr, $arr_size); 
?> 
</body>
</html>