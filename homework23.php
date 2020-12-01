<?php
    $usr=[
        ['名前' => '山田', '性別' =>'男', '数学' => 78, '国語' => 47, '英語' => 92],
        ['名前' => '田中', '性別' =>'女', '数学' => 12, '国語' => 88, '英語' => 67],
        ['名前' => '高橋', '性別' =>'男', '数学' => 56, '国語' => 34, '英語' => 77],
        ['名前' => '橋本', '性別' =>'女', '数学' => 97, '国語' => 55, '英語' => 45]
    ];

    //最大値
    $max_math = 0;

    foreach($usr as $user){
    if($max_math<$user["数学"]){
    $max_math = $user["数学"];
    }
    }
    print(($max_math)."\n");

    //最小値
    $min_math = 100 ;

    foreach($usr as $user){
        if($min_math>$user["国語"]){
        $min_math = $user["国語"];
    }
    }
    print(($min_math)."\n");
    //各科目の平均点
    //数学
    $sums["数学"] = array_sum(array_column($usr,"数学"));
    foreach($sums as $key =>$val)

    //国語
    $sums["国語"] = array_sum(array_column($usr,"国語"));
    foreach($sums as $key =>$val)

    //英語
    $sums["英語"] = array_sum(array_column($usr,"英語"));
    foreach($sums as $key =>$val)
    print(($val/count($usr))."\n");

    //性別別各科目平均点
    //男性
    $math = 0;
    $nation = 0;
    $english = 0;
    $count = 0;
    foreach($usr as $user){
        if($user["性別"] == "男"){
            $math = $math + $user["数学"];
            $nation = $nation + $user["国語"];
            $english = $english + $user["英語"];
            $count++;
        }
    }
    print($math."\n");
    print($nation."\n");
    print($english."\n");
    
    print($math/$count."\n");
    print($nation/$count."\n");
    print($english/$count."\n");
    
    //女性
    $math2 = 0;
    $nation2 = 0;
    $english2 = 0;
    $count2 = 0;
    foreach($usr as $user){
        if($user["性別"] == "女"){
            $math2 = $math2 + $user["数学"];
            $nation2 = $nation2 + $user["国語"];
            $english2 = $english2 + $user["英語"];
            $count2++;
        }
    }
    print($math2."\n");
    print($nation2."\n");
    print($english2."\n");
    
    print($math2/$count2."\n");
    print($nation2/$count2."\n");
    print($english2/$count2."\n");
    
?>