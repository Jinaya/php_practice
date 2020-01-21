<?php

// function sum($max){
//     $result = 0;
//     for($i = 1; $i <= $max; $i++){
//         $result += $i;
//     }
//     return $result;
// }
// echo sum(100);

// $string = "ABCDEF";
// echo strlen($string);

// $string = "I love Ruby";
// $new_string = str_replace("Ruby", "PHP", $string);
// echo $new_string;

// $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// echo count($array);

// $array = array(2, 5, 9, 7, 3, 1, 8, 6, 4);
// asort($array);
// print_r($array);

//課題

// function sum($max){
//     $result = 0;
//     for($i = 1; $i <= $max; $i++){
//         $result = $i*2;
//     }
//     return $result;
// }
// echo sum(10);



// function f($a, $b){
//     $result = $a + $b;
//     return $result;
    
// }
// echo f(1,3);



// $arr = array(1, 3, 5, 7, 9);
// for($i = 1; $i <= 9; $i++){
//     $arr *= $i;
// }
// return $result;
// echo $result;



// function max_array($arr){
//     $max_number = $arr[0];
//     foreach($arr as $a){
//         echo $a;
//     }
//     return $max_number;
// }



// $text = '<p>Test paragraph.</p><a href="#fragment">Other text</a>';
// echo strip_tags($text);
// echo "\n";


// $stack = array("banana", "orange");
// array_push($stack, "apple", "lemmon");
// print_r($stack);


// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $result = array_merge($array1, $array2);
// print_r($result);


// $nextweek = time() + (7 * 24 * 60 * 60);
// echo 'NOW: '. date('Y-m-d'). "\n";
// echo 'Next Week: '. date('Y-m-d', $nextweek). "\n";


// date_default_timezone_set('UTC');
// echo "July 1, 2000 is on a ". date("l", mktime(0, 0, 0, 7, 1, 2000));


date_default_timezone_set('UTC');
echo "January 21, 2020 is on a ". date("l", mktime(0, 0, 0, 1, 21, 2020));
