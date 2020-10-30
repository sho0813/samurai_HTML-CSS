<?php
$num1=40;//中間試験
$num2=49;//期末試験
if("$num1,$num2>=75"){
  print("合格\n");
}else{
  print("不合格\n");
}


if(($num1 + $num2)>=140){
  print("合格\n");
}else{
  print("不合格\n");
}


if(($num1 + $num2)>=100){
  print("合格\n");
}else if($num1 >=90){
  print("合格\n");
}else if($num2>=90){
  print("合格\n");
}else{
  print("不合格\n");
}
//不合格のやり方が不明

?>