<?php
$items=[
  ['id'=>1,'name'=>'pencil','price'=>100,'stock'=>78,'sales'=>47],
  ['id'=>2,'name'=>'pen','price'=>150,'stock'=>12,'sales'=>30],
  ['id'=>3,'name'=>'case','price'=>500,'stock'=>12,'sales'=>20],
  ['id'=>4,'name'=>'note','price'=>200,'stock'=>97,'sales'=>100]
];

//在庫が多い順にソートして、商品名(name)と在庫(stock)内容を表示
//ok
foreach($items as $key => $value){
  $stock[$key] = $value['stock'];
}
array_multisort($stock,SORT_ASC,$items);
print_r($items);

//在庫が15個未満の場合の商品名表示ok
$stock2= [];
$name = 0;
foreach($items as $item){
  if($item['stock']<15){
    $stock2[] = $item['name'];
  }
};
foreach($stock2 as $stocks){
  print(($stocks)."\n");
}
//売上(price*sales)が高い順に表示
//バブルソートを使用
$arr = [];
foreach($items as $item){
  $arr[] = $item['price'] * $item['sales'];
}
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
//print(($proceed)."\n");
 //商品名に'pen'がつく商品名と価格表示ok
 $name=[];
foreach($items as  $item){
  if (substr($item['name'],0,3)=='pen'){
    $name[] = $item['name'];
    $name[] = $item['price'];
  }
}
print_r($name);
?>