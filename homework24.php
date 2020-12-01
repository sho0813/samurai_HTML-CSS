<?php
$items=[
  ['id'=>1,'name'=>'pencil','price'=>100,'stock'=>78,'sales'=>47],
  ['id'=>2,'name'=>'pen','price'=>150,'stock'=>12,'sales'=>30],
  ['id'=>3,'name'=>'case','price'=>500,'stock'=>12,'sales'=>20],
  ['id'=>4,'name'=>'note','price'=>200,'stock'=>97,'sales'=>100]
];

//在庫が多い順にソートして、商品名(name)と在庫(stock)内容を表示
//multisortを使用したい
foreach($items as $key => $value){
  $stock[$key] = $value['stock'];
}
array_multisort($stock,SORT_ARC,$items);

//在庫が15個未満の場合の商品名表示
$stock2= 0;
$name = 0;
foreach($items as $item){
  if($item['stock']<15){
    $stock2 = $item['name'];
  }
}
print(($stock2)."\n");

//売上(price*sales)が高い順に表示
$proceed = 0;
foreach($items as $item){
  if($proceed < $item['price']*$item['sales']){
    $proceed =$item['price']*$item['sales'];
  }
}
print(($proceed)."\n");
 //商品名に'pen'がつく商品名と価格表示
foreach($items as  $item){
  if ($item['name']=='pen'){
    $name = $item['price'];
  }
}
print($name);
?>