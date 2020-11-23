<?php
    $x=[60,50,90,70,80,45];
    
    //最小値
    $mi = $x[0];
    for ($i=1; $i<count($x); $i++) { 
        if ($x[$i] < $mi) { 
            $mi = $x[$i];
        }
    }

    echo $mi;
    //最大値
    $ma = $x[0];
    for ($i=1; $i<count($x); $i++) { 
        if ($x[$i] > $ma) { 
            $ma = $x[$i]; 
        } 
    }  
    echo $ma;

    $arr = array(60,50,90,70,80,45);
    var_dump(bubble_sort($arr));
    function bubble_sort($array){
        for($i = 0; $i < count($array); $i++){
            for($n = 1; $n < count($array); $n++){
                if($array[$n-1] > $array[$n]){
                    $temp = $array[$n];
                    $array[$n] = $array[$n-1];
                    $array[$n-1] = $temp;
                }
            }
        }
        return $array;
    }
    
?>