<?php
    $x=[60,50,90,70,80,45];
    
    //最小値
    $mi = $x[0];
    for ($i=1; $i<count($x); $i++) { 
        if ($x[$i] < $mi) { 
            $mi = $x[$i];
        }
    }
    //コメント
    //処理の流れは良いです。for分の中身を見てみると$i<6となっていますよね？？
    //これだと配列の長さが7とか8とかに変わってしまうとプログラムを修正しないといけません。
    //そのため、配列の長さを取得してfor分で回すようにしましょう。
        
    echo $mi;
    //最大値
    $ma = $x[0];
    for ($i=1; $i<count($x); $i++) { 
        if ($x[$i] > $ma) { 
            $ma = $x[$i]; 
        } 
    }  
    echo $ma;

    //最小値と同様です。for文を修正しましょう。

    //降順のやり方が不明です
    //ソートの仕方はいろいろとあります。
    //今回は"バブルソート"というキーワードで調べてみて対応してみてください。
    //クイックソート等他にもソートがある
    //ソートによって処理速度が変わる
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