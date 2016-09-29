<?php
# logic.php

//special characters array
$charArray = ['~','!','@','#', '$', '%', '^', '&', '*', '(', ')', '-'];
array_push($charArray,'_', '=', '+', '[', '{', ']', '}', '|', ':', ':', '"');
array_push($charArray, "'", ',', '<', '.', '>', '/', '?');

// test word array hardcode for now,
//with multiple shuffles to increase randomness
$wordArray = ['now', 'lame', 'heart', 'heavy', 'woman', 'baby', 'guilty', 'archaic', 'pumpkin', 'card', 'age', 'formal', 'angle', 'ghost', 'fire', 'archive', 'bladder', 'mangle', 'north', 'fusion', 'garter', 'whistle', 'cave', 'governor', 'still', 'riddle', 'tan', 'grift', 'aloe', 'plant', 'frog','mile', 'sift', 'bring', 'trap', 'malice'];
array_push($wordArray, 'fit', 'art', 'fun', 'willow', 'fort', 'gun', 'game', 'geology', 'elk', 'brave', 'snoop', 'fritter');
$newArray[] = shuffle($wordArray);
$newerArray[] = shuffle($newArray);
$wordArray[] = $newerArray;

//variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wordQty = $_POST["wordQty"];
    $delimit = $_POST["delimit"];
    $inclNum = $_POST["inclNum"];
    $inclChar = $_POST["inclChar"];
} else {
    //    $wordQty = 2;//default
    $delimit = "-";//default
    $inclNum = "no";//default
    $inclChar = "no";//default
}
//Random positions for numbers and special characters
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numRandomIndex = rand(0,($wordQty-1));
    $numRandomPos = rand(0,1);
    $charRandomIndex = rand(0,($wordQty-1));
    $charRandomPos = rand(0,1);
}

//user selected delimiter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['delimit'] == 'hyphen') {
        $delimit = "-";
    }elseif ($_POST['delimit'] == 'space') {
        $delimit = " ";
    }else {
        $delimit = "";
        for ($x = 1; $x < $wordQty; $x++) {
            $wordArray[$x] = ucfirst($wordArray[$x]);
        }
    }
}

//adds a randomly selected special character to a random word.
//inserts it into random position at the front or back of complete words
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['inclChar'] == 'yes') {
        $randomChar = $charArray[array_rand($charArray,1)];
        switch ($charRandomPos) {
            case 0:
            $wordArray[$charRandomIndex] = substr_replace($wordArray[$charRandomIndex], $randomChar, 0, 0);
            break;
            case 1:
            $temp = $wordArray[$charRandomIndex].$randomChar;
            $wordArray[$charRandomIndex] = $temp;
            break;
            default:
            //do nothing
        }
    }
    //adds a randomly selected number to a random word.
    //inserts it into random position at the front or back of complete words
    if ($_POST['inclNum'] == 'yes') {
        $randomNum = rand(0,9);
        switch ($numRandomPos) {
            case 0:
            $wordArray[$numRandomIndex] = substr_replace($wordArray[$numRandomIndex], $randomNum, 0, 0);
            break;
            case 1:
            $temp = $wordArray[$numRandomIndex].$randomNum;
            $wordArray[$numRandomIndex] = $temp;
            break;
            default:
            //do nothing
        }
    }
}
//generates a concatenated string of random words with user defined delimiter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($wordQty > 0){
        $newPassword = $wordArray[0];
    }
    for ($x = 1; $x < $wordQty; $x++) {
        $addWords = $delimit . $wordArray[$x];
        $newPassword.=$addWords;
    }
}else {
    $newPassword ="";
}
