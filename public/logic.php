<?php
# logic.php

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

//special characters array
$charArray = ['~','!','@','#', '$', '%', '^', '&', '*', '(', ')', '-'];
array_push($charArray,'_', '=', '+', '[', '{', ']', '}', '|', ':', ':', '"');
array_push($charArray, "'", ',', '<', '.', '>', '/', '?');

// test word array
$wordArray = ['now', 'lame', 'heart', 'heavy', 'woman', 'baby', 'guilty', 'archaic', 'pumpkin', 'card', 'age', 'formal', 'angle', 'ghost', 'fire', 'archive', 'bladder', 'mangle', 'north', 'fusion', 'garter', 'whistle', 'cave', 'governor', 'still', 'riddle', 'tan', 'grift', 'aloe', 'plant', 'frog','mile', 'sift', 'bring', 'trap', 'mallice'];
array_push($wordArray, 'fit', 'art', 'fun', 'willow', 'fort', 'gun', 'game', 'geology', 'elk', 'brave', 'snoop', 'fritter');
$newArray[] = shuffle($wordArray);
$newerArray[] = shuffle($newArray);
$wordArray[] = $newerArray;

// echo "<pre>";
// var_dump($wordArray);
// echo "</pre>";
// echo '<br><br>';

$numWords = $_GET["wordQty"];

if ($_GET['delimit'] == 'hyphen') {
    $delimiter = "-";
}elseif ($_GET['delimit'] == 'space') {
    $delimiter = " ";
}else {
    $delimiter = "";
    for ($x = 1; $x < $numWords; $x++) {
        $wordArray[$x] = ucfirst($wordArray[$x]);
    }
}
echo 'the delimiter is:'.$delimiter.':  <br>';


if ($_GET['inclChar'] == 'yes') {
    $randomChar = $charArray[array_rand($charArray,1)];
    // echo 'random character: '.$randomChar.'<br>';
}else {
    $randomChar = "";
        // echo 'random character: '.$randomChar.'<br>';
}

if ($_GET['inclNum'] == 'yes'){
    $pNum = rand(0,9);
//    echo 'random integer: '.$pNum.'<br>';
} else {
    $pNum = "" ;
//        echo 'random integer: '.$pNum.'<br>';
}
$newPassword = $wordArray[0];
for ($x = 1; $x < $numWords; $x++) {
    $addWords = $delimiter . $wordArray[$x];
    $newPassword.=$addWords;
//   echo 'The words are:'.$wordArray[$x]."<br>";
}
echo 'concatenated password is--->'.$newPassword.'<br';



//$random_words=array_rand($wordArray,$numWords);

// for ($x = 0; $x <= 5; $x++) {
//     echo "The number is: $x <br>";
// }

// foreach($_GET as $inputContestant => $contestantName) {
//     if($contestantName !=""){
//         $contestants[$contestantName] = 'loser';
//     }
// }
// $winner = array_rand($contestants,1);
// $contestants[$winner] = "winner";
// if($winner == ""){
//     $contestants[$winner] = "none";
// }
