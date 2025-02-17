<?php
//1---------------------------------------------------------
// $colors = ['red', 'white', 'green'];
// echo "<p>The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[2] lawn, the $colors[1] house, the leaden sky. The new president and his first lady.  Richard M. Nixon</p>";
//2---------------------------------------------------------

$color_array = ['white', 'green', 'red'];
//look at the html
//3---------------------------------------------------------


// $cities = [
//     "Italy" => "Rome",
//     "Luxembourg" => "Luxembourg",
//     "Belgium" => "Brussels",
//     "Denmark" => "Copenhagen",
//     "Finland" => "Helsinki",
//     "France" => "Paris",
//     "Slovakia" => "Bratislava",
//     "Slovenia" => "Ljubljana",
//     "Germany" => "Berlin",
//     "Greece" => "Athens",
//     "Ireland" => "Dublin",
//     "Netherlands" => "Amsterdam",
//     "Portugal" => "Lisbon",
//     "Spain" => "Madrid"
// ];

// ksort($cities);

// foreach ($cities as $country => $city) {
//     echo "The capital of $country is: $city.<br>";
// }



//4---------------------------------------------------------

// $colors = [4 => 'white', 6 => 'green', 11 => 'red'];
// $chunked = array_chunk($colors, count($colors));
// echo $chunked[0][0];


//5---------------------------------------------------------

// $nums = ['1', '2', '3','4', '5'];
// $nums[2] = '$';
// print_r($nums)

//6---------------------------------------------------------
// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// asort($fruits);

// foreach ($fruits as $key => $val) {
//     echo  $key . " = " . $val . "<br>";
// }
//7---------------------------------------------------------
// $temps = [
//     78,
//     60,
//     62,
//     68,
//     71,
//     68,
//     73,
//     85,
//     66,
//     64,
//     76,
//     63,
//     75,
//     76,
//     73,
//     68,
//     62,
//     73,
//     72,
//     65,
//     74,
//     62,
//     62,
//     65,
//     64,
//     68,
//     73,
//     75,
//     79,
//     73
// ];
// $average = array_sum($temps) / count($temps);

// echo "The average temperature is: " . $average;
//---------
// echo '<br/>';
// asort($temps);
// $lowest_five = array_slice($temps, 0, 5);
// echo "The five lowest temperature: ";
// foreach ($lowest_five as $value) {
//     echo "$value ,";
// };
//---------
// echo '<br/>';
// $highest_five = array_slice($temps, -5);
// echo "The five highest temperature: ";
// foreach ($highest_five as $value) {
//     echo "$value ,";
// };
//8---------------------------------------------------------

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
// $merging_array = array_merge($array1, $array2);
// print_r($merging_array);


//9---------------------------------------------------------


// $colors = array("red", "blue", "white", "yellow");
// $upper_case = array_map('strtoupper', $colors);
// print_r($upper_case);

//10---------------------------------------------------------

// $colors = array("RED","BLUE", "WHITE","YELLOW");
// $lower_case = array_map('strtolower', $colors);
// print_r($lower_case);

//11---------------------------------------------------------
// $words = array("abcd","abc","de","hjjj","g","wer")




//12---------------------------------------------------------

$array1 = array(2, 0, 10, 1, 6);
$filtered_array = array_filter($array1, fn($num) => $num > 0);
$min_value = min($filtered_array);

echo $min_value;

//----------------------------------------------------------------




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($color_array as $color) {
            echo "<li>$color</li>";
        }
        ?>
    </ul>
</body>

</html>