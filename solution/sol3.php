<!DOCTYPE html>
<html>
<body>
<?php
function getMaxLength($arr, $n) 
{ 
    // intitialize count 
    $count = 0;  
      
    // initialize max 
    $result = 0;  
  
    for ($i = 0; $i < $n; $i++) 
    { 
        // Reset count when 0 is found 
        if ($arr[$i] == 0) 
            $count = 0; 
  
        // If 1 is found, increment  
        // count and update result 
        // if count becomes more. 
        else
        { e
            // increase count 
            $count++; 
            $result = max($result, $count); 
        } 
    } 
  
    return $result; 
} 
?>
</body>
</html>