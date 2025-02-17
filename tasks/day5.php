<?php
//1-----------------------------------
// $year = 2013;

// if($year % 4 == 0){
//     echo 'this is a leap year';
// }else{
//     echo 'this is not a leap year';
// };
// echo '</br>';
//2-----------------------------------
// $temp = 27;

// if($temp > 20){
//     echo 'its winter';
// }else{
//     echo 'its not winter';
// };
// echo '</br>';
//3-----------------------------------
// $first_num = 2;
// $sec_num = 2;
// $sum = $first_num + $sec_num;
// if($first_num === $sec_num){
//     echo ($sum * 3);
// }else{
//     echo $sum;
// };
// echo '</br>';
//4-----------------------------------
// $first_num = 10;
// $sec_num = 10;
// $sum = $first_num + $sec_num;
// if($sum == 30){
//     echo ($sum);
// }else{
//     echo 'false';
// };
// echo '</br>';
//5-----------------------------------
// $num = 20;
// if($num % 3 !== 0){
//     echo 'false';
// };
// echo '</br>';
//6-------------------------------------
// $num = 50;
// if($num <=20 || $num >=50){
//     echo 'true';
// }else{
//     echo 'false';
// };
// echo '</br>';
//7-------------------------------------
// $nums = [1, 19, 9, 4];
// $maxNumber = max($nums);
// echo $maxNumber;
//8-------------------------------------
// $units  = 140;
// $price = 0;
// if ($units <= 50) {
//     $price = 2.5 * $units;
// } elseif ($units > 50 && $units <= 150) {
//     $price = 5 * $units;
// } elseif ($units > 150 && $units <= 250) {
//     $price = 6.2 * $units;
// } else {
//     $price = 7.5 * $units;
// }
// echo $price;
//9-------------------------------------
// $num1 = 4;
// $num2 = 8;
// $result = 0;
// $operation = '-';
// switch ($operation) {
//     case '+':
//         $result = $num1 + $num2;
//         break;

//     case '-':
//         $result = $num1 - $num2;
//         break;

//     case '*':
//         $result = $num1 * $num2;
//         break;

//     case '/':
//         $result = $num1 / $num2;
//         break;

//     default:
//         $result = "not valid operator";
// }
// echo $result;

//10-------------------------------------
// $age = 19;
// if ($age >= 18) {
//     echo 'eligible to vote';
// } else {
//     echo 'not eligible to vote';
// }

//11-------------------------------------
// $number = -10;
// if ($number < 0) {
//     echo 'negative';
// } elseif ($number > 0) {
//     echo 'positive';
// } else {
//     echo "zero";
// }

//12-------------------------------------
// $marks = [90, 86, 95, 63, 80, 74, 79, 82, 70];
//         $sum = 0;
//         $avg = 0;
//         $count = count($marks);
//         for ($i = 0; $i < $count; $i++) {
//             $sum += $marks[$i];
//         }
//         $avg = $sum / $count;
//         if ($avg < 60) {
//             echo 'F';
//         } elseif ($avg < 70) {
//             echo 'D';
//         } elseif ($avg < 80) {
//             echo 'C';
//         } elseif ($avg < 90) {
//             echo 'B';
//         } elseif ($avg < 100) {
//             echo 'A';
//         }
