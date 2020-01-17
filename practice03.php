<?php
// $height = 230;
// if ($height < 150) {
//   echo "150cm 未満の方はご乗車できません。";
// }elseif ($height >= 200) {
//   echo "200cm 以上の方はご乗車できません。";
// }else{
//   echo "ご乗車になれます。";
// }

// $weekday = "木曜";

// switch($weekday) {
//   case "月曜":
//   case "木曜":
//     echo "可燃ゴミの日です。";
//     break;
//   case "水曜":
//     echo "資源ごみの日です。";
//     break;
//   default:
//     echo "回収はありません。";
//     break;
// }

$a = 3;
$b = 3;
$c = "3";

//var_dump($a == $b);
// var_dump($a != $b);
// var_dump($a > $b);
// var_dump($a >= $b);
// var_dump($a < $b);
// var_dump($a <= $b);
// var_dump($a === $c);
// var_dump($a !== $c);

// for($i = 0; $i < 10; $i++){
//   echo $i;
// }

// $total = 0;
// // echo $total;

// for($i = 0; $i <= 100; $i++){
//   $total += $i;
// }
// echo $total;

// $fruits = array("apple", "orange", "lemmon");

// echo count($fruits);
// for($i = 0; $i < count($fruits); $i++) {
//   echo "要素は". $fruits[$i];
//   echo "\n";
// }

// $animals = array("dog", "cat", "panda");

// foreach($animals as $animal) {
//   echo "要素は". $animal;
//   echo "\n";
//}


//課題

// $name = "Jingao";
 
// if ($name == "Jingao") {
//   echo "私の名前はJingaoです";
// }else{
//   echo "Jingaoではありません";
// }

// $total = 0;
// for($i = 0; $i <= 10000; $i++) {
//   $total += $i;
// }
// echo $total;

// $fruits = array("banana", "apple", "orange", "melon", "strawberry");

// foreach($fruits as $fruit) {
//   echo $fruit;
//   echo "\n";
// }

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0) {
    echo $i;
    echo "\n";
  }
}