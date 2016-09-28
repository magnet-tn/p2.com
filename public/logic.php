<?php
# logic.php

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

//$contestants = [];

//special characters array
$charArray = ['~','!','@','#', '$', '%', '^', '&', '*', '(', ')', '-'];
array_push($charArray,'_', '=', '+', '[', '{', ']', '}', '|', ':', ':', '"');
array_push($charArray, "'", ',', '<', '.', '>', '/', '?');

// test word array
$wordArray = ['pumpkin', 'card', 'age', 'formal', 'angle', 'ghost', 'fire', 'archive', 'bladder', 'mangle', 'north', 'fusion', 'garter', 'whistle', 'cave', 'governor', 'still', 'riddle', 'tan', 'grift', 'aloe', 'plant', 'frog','mile', 'sift', 'bring', 'trap', 'mallice'];
// echo "<pre>";
// var_dump($_GET);
// // echo "</pre>";
// echo '<br><br>';

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

$numWords = $_GET["wordQty"];
$random_words=array_rand($wordArray,$numWords);


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
