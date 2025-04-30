<?php

function TwoSum($nums, $target){
    $count = count($nums);
    for($i = 0; $i < $count; $i++){
        for($j = $i + 1; $j < $count; $j++){
            if($nums[$i] + $nums[$j] == $target){
                return [$i, $j];
            }
        }
    }
    return [];
}

// ✅ Move this part outside the function
$nums = [1, 2, 3, 4, 5, 6, 7, 8];
$target = 4;
$result = TwoSum($nums, $target);

// Print result
print_r($result);
?>
