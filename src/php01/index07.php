<?php
////////////
$people = [
  [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "name" => "Hanako",
    "age" => 16,
    "gender" => "women"
  ],
];

foreach ($people as $person) {
  echo $person['name'] . '(' . $person['age'] . '歳'. $person['gender'] . ')';
  echo '<br />';
}

////////////
// $people = array(
//   'person1' => 'Taro',
//   'person2'  => 'Jiro',
//   'person3'  => 'Saburo'
// );

// foreach ($people as $person => $name) {
//   print $person . "は" . $name . "です" . '<br />';
// }


////////////
// $people = array('Taro', 'Jiro', 'Saburo');

// foreach ($people as $person) {
//   echo $person;
//   echo '<br />';
// }

////////////
// $people = [
//   [
//     "last_name" => "山田",
//     "first_name" => "太郎",
//     "age" => 29,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "鈴木",
//     "first_name" => "次郎",
//     "age" => 25,
//     "gender" => "男性"
//   ],
//   [
//     "last_name" => "佐藤",
//     "first_name" => "花子",
//     "age" => 20,
//     "gender" => "女性"
//   ]
// ];

// echo $people[0]["last_name"] .'<br />';
// echo $people[1]["first_name"] .'<br />';
// echo $people[2]["gender"];

////////////
// $people = [
//   'person1' => 'taro',
//   'person2' => 'jiro',
// ];

// echo $people['person1'];

////////////
// $people = array(
//   'person1' => 'Taro',
//   'person2'  => 'Jiro',
//   'person3'  => 'Saburo'
// );

// var_dump($people);

////////////
// $people = array('Taro', 'Jiro', 'Saburo');

// // var_dump($people);
// echo $people[0];