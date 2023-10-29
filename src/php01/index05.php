<?php
////////////
$fizz = 'Fizz';
$buzz = 'Buzz';

for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    echo '●';
  }
  echo '<br />';
}

////////////
// $fizz = 'Fizz';
// $buzz = 'Buzz';

// for ($i = 1; $i <= 50; $i++) {
//   if($i % 3 === 0 && $i % 5 === 0) {
//     echo $fizz . $buzz .'<br />';
//   } else if ($i % 3 === 0) {
//     echo $fizz . '<br />';
//   } else if ($i % 5 === 0) {
//     echo $buzz . '<br />';
//   } else {
//     echo $i . '<br />';
//   }
// }


////////////
// $num = 0;
// do {
//   echo 'num = ' . $num . '<br />';
//   $num++;
// } while ($num < 3);


////////////
// $i = 0;
// do {
//   echo $i . '<br />';
//   $i++;
// } while ($i < 5);

////////////
// $count = 0;
// while ($count <= 100) {
//   if ($count === 20) {
//     break;
//   }
//   if ($count % 3 === 0) {
//     $count++;
//     continue;
//   }
//   echo $count . '<br />';
//   $count++;
// }


////////////
// $i = 0;
// while ($i < 10) {
//   if ($i == 5) {
//     $i++;
//     continue;
//   }
//   echo $i;
//   $i++;
// }


////////////
// $i = 0;
// while ($i < 10) {
//   if ($i == 5) {
//     break;
//   }
//   echo $i;
//   $i++;
// }


////////////
// $count = 0;

// while ($count < 20) {
//   $count++;
//   echo $count . '<br />';
// }

////////////
// $i = 0;

// while ($i < 3) {
//   echo 'i = ' . $i . '<br />';
//   $i += 1;
// }

////////////
// for ($i = 2; $i <= 10; $i+=2) {
//   echo $i;
//   echo "<br />";
// }

////////////
// for ($i = 0; $i < 4; $i++) {
//   echo $i;
// }