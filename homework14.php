<?php
$num1=90;//中間試験
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


if(($num1 + $num2)>=100 && $num1 >=90 or $num2>=90){
  print("合格\n");
}else{
  print("不合格\n");
}

?>