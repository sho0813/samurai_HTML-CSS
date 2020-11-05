<?php
$subjects =["国語" =>46," 数学"=>80,"英語"=>78,"理科"=>45,"社会2"=>30];
$sum=0;
foreach($subjects as $subject){
  $sum = $sum + $subject;
}
print($sum / 5);
?>