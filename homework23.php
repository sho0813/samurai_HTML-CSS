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
    //男数学
    
    //男国語
    //男英語
?>