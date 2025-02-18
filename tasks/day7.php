<?php
$x = 12;
$y = 10;
function swaper($num1, $num2)
{
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    $num1 = $num1 - $num2;
    return "x = $num1 y= $num2";
};

echo swaper($x, $y);
//2---------------------------------------------
echo "<br>";
$armstrong = "407";
function armstronger($num)
{
    $splited = str_split($num);
    if ($splited[0] ** 3 + $splited[1] ** 3 + $splited[2] ** 3 == $num) {
        return "Armstrong number";
    } else {
        return "Not an Armstrong number";
    }
};
echo armstronger($armstrong);

//3---------------------------------------------
echo "<br/>";
$words = "Eva, can I see bees in a cave?";
function isPalindrome($str)
{
    $clean = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    $reversedStr = strrev($clean);
    return $clean === $reversedStr;
}
if (isPalindrome($words)) {
    echo "Yes, it is a palindrome";
} else {
    echo "No, it is not a palindrome";
}

//4---------------------------------------------
echo "<br/>";
function removeDuplicates($array)
{
    return array_unique($array);
}
$array1 = array(2, 4, 7, 4, 8, 4);
$result = removeDuplicates($array1);
print_r($result);

//5---------------------------------------------
echo "<br/>";
$str = "remove";
$rev = strrev($str);
echo $rev;

//6---------------------------------------------
echo "<br/>";
$lower = "remove";
$splited = str_split($lower);
if ($splited == str_split(strtolower($lower))) {
    echo "Your string is ok";
} else {
    echo "Your string is not ok";
}

//7---------------------------------------------
echo "<br/>";
$text = "group orange coding3";
echo strtoupper($text);
echo '<br>';
echo strtolower($text);
echo '<br>';
echo ucfirst($text);
echo '<br>';
echo ucwords($text);


//8---------------------------------------------
echo "<br/>";
$number = "085119";
$num1 = substr($number, 0, 2);
$num2 = substr($number, 2, 2);
$num3 = substr($number, 4, 2);

$numbers = $num1 . ':' . $num2 . ':' . $num3;

echo $numbers;

//9---------------------------------------------
echo "<br/>";
$word = "I am a full stack developer at Orange coding academy";
if (strpos($word, 'Orange') == true) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
//10---------------------------------------------
echo "<br/>";
$url = 'www.orange.com/index.phps';
$path = parse_url($url, PHP_URL_PATH);
echo basename($path);
//11---------------------------------------------
echo "<br/>";
$word1 = 'dragonball';
$word2 = 'dragonboll';
$result = strspn($word1 ^ $word2, "\0");
printf(
    'First difference between two strings at position  %d: "%s" vs "%s"',
    $result,
    $word1[$result],
    $word2[$result]
);
printf("\n");

//12---------------------------------------------
$char = 'a';
//13---------------------------------------------
$nums12 = '0000657022.25';

//14---------------------------------------------
echo "<br/>";
$every = '\"\1+2/3*2:2-3/4*3';
$cleaning = preg_replace("/[^a-zA-Z0-9]/", " ", $every);
echo $cleaning;
//15---------------------------------------------
echo "<br/>";
$str = "the quick brown fox jumps over the lazy dog";
$a = preg_split("~\s+~", $str);
echo $a[0] . " " . $a[1] . " " . $a[2] . " " . $a[3] . " " . $a[4];
