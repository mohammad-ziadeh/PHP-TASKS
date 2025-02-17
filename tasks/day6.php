<?php
//1---------------------------------------------------------
// $colors = ['red', 'white', 'green'];
// echo "<p>The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[2] lawn, the $colors[1] house, the leaden sky. The new president and his first lady.  Richard M. Nixon</p>";
//2---------------------------------------------------------

$color_array = ['white', 'green', 'red'];

//3---------------------------------------------------------

$countries = ["Belgium", "Denmark", "Finland", "France", "Germany", "Greece", "Ireland", "Italy", "Luxembourg", "Netherlands", "Portugal", "Slovakia", "Slovenia", "Spain"];
$capitals = ["Brussels", "Copenhagen", "Helsinki", "Paris", "Berlin", "Athens", "Dublin", "Rome", "Luxembourg", "Amsterdam", "Lisbon", "Bratislava", "Ljubljana", "Madrid"];


//4---------------------------------------------------------

// $colors = [4 => 'white', 6 => 'green', 11 => 'red'];
// $chunked = array_chunk($colors, count($colors));
// echo $chunked[0][0];


//5---------------------------------------------------------

// $nums = ['1', '2', '3','4', '5'];
// $nums[2] = '$';
// print_r($nums)

//6---------------------------------------------------------


//7---------------------------------------------------------

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