<?php 

// solution start
$str = end($argv);

function length($str) {
    $count = 0;
    $flag = false;
    for($i = strlen($str)-1; $i>=0 ; $i--){
        if( ($str[$i] >= 'a' && $str[$i] <= 'z') ||
            ($str[$i] >= 'A' && $str[$i] <= 'Z')){
                $flag = true;
                $count++;
            }
        else {
            if($flag == true)
                return $count;
        }
    }
    return $count;
}

echo "The length of last word is ", length($str);

// Explaination

