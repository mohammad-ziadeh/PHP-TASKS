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

//8-------------------------------------
$electric_bill = 166;
if ($electric_bill <= 50) {
    $unit = 2.50;
} elseif ($electric_bill <= 150) {
    $unit = 5.00;
} elseif ($electric_bill <= 250) {
    $unit = 6.20;
} else {
    $unit = 7.50;
}
echo $electric_bill * $unit;
