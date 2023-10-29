<?php
////////////
function calculateTriangleArea($base, $height) 
{
  $area = $base * $height / 2;
  return '三角形の面積：'. $area.'<br />';
}

function calculateRectangleArea($width, $height)
{
  $area = $width * $height;
  return '四角形の面積：' . $area.'<br />';
}

function calculateTrapezoidArea($upperBase, $bottomBase, $height)
{
  $area = ($upperBase + $bottomBase) * $height / 2;
  return '台形の面積：' . $area.'<br />';
}

echo calculateTriangleArea(5, 7);
echo calculateRectangleArea(3, 12);
echo calculateTrapezoidArea(4, 9, 6);

////////////
// function judge($score1, $score2, $score3)
// {
//   $total = $score1 + $score2 + $score3;
//   if ($total > 210) {
//     return '合計点は'. $total. 'なので合格です'.'<br />';
//   }
//   return '合計点は' . $total . 'なので不合格です' . '<br />';
// }

// echo judge(60, 55, 70);
// echo judge(75, 60, 80);

////////////
// function sum($number1, $number2)
// {
//   return $number1 + $number2;
// }

// echo sum(2, 3);

////////////
// function text($number1, $number2)
// {
//   $value = $number1 + $number2;
//   return $value;
// }

// $total = text(2, 4);
// echo $total;

////////////
// function outputHello()
// {
//   echo "Hello world";
// }

// outputHello();

////////////
// function outputNumber($a)
// {
//   echo "引数の値は" . $a . "です";
//   return;
// }

// outputNumber(2);