<?php
$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($nums)
{
  $sum = 0;
  foreach ($nums as $num) {
    $sum += $num;
  }
  return $sum;
}
$result = sum($numbers);
echo "合計: {$result}<br>";
sum($numbers2);
// $sum2 = 0;
// foreach ($numbers2 as $num2) {
//   $sum2 += $num2;
// }
// echo "合計: {$sum2}<br>";
