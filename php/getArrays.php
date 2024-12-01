<?php
$fourLetterWordsFilePath = 'textFiles/4.txt';
$fiveLetterWordsFilePath = 'textFiles/5.txt';
$sixLetterWordsFilePath = 'textFiles/6.txt';
$sevenLetterWordsFilePath = 'textFiles/7.txt';
$eightLetterWordsFilePath = 'textFiles/8.txt';
$nineLetterWordsFilePath = 'textFiles/9.txt';
$tenLetterWordsFilePath = 'textFiles/10.txt';
$elevenLetterWordsFilePath = 'textFiles/11.txt';

$fourLetterWordsArray = [];
$fiveLetterWordsArray = [];
$sixLetterWordsArray = [];
$sevenLetterWordsArray = [];
$eightLetterWordsArray = [];
$nineLetterWordsArray = [];
$tenLetterWordsArray = [];
$elevenLetterWordsArray = [];

if (file_exists($fourLetterWordsFilePath) && file_exists($fiveLetterWordsFilePath) && file_exists($sixLetterWordsFilePath) && 
file_exists($sevenLetterWordsFilePath) && file_exists($eightLetterWordsFilePath) && file_exists($nineLetterWordsFilePath) &&
file_exists($tenLetterWordsFilePath) && file_exists($elevenLetterWordsFilePath)) {

    $fourLetterWordsArray = file($fourLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $fiveLetterWordsArray = file($fiveLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $sixLetterWordsArray = file($sixLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $sevenLetterWordsArray = file($sevenLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $eightLetterWordsArray = file($eightLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $nineLetterWordsArray = file($nineLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $tenLetterWordsArray = file($tenLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $elevenLetterWordsArray = file($elevenLetterWordsFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
} else {
    echo "File(s) not found!";
}

// Convert the arrays to JSON format
$wordsArrays = json_encode([
    'four' => $fourLetterWordsArray,
    'five' => $fiveLetterWordsArray,
    'six' => $sixLetterWordsArray,
    'seven' => $sevenLetterWordsArray,
    'eight' => $eightLetterWordsArray,
    'nine' => $nineLetterWordsArray,
    'ten' => $tenLetterWordsArray,
    'eleven' => $elevenLetterWordsArray
]);

// Pass the JSON to JavaScript by echoing it into a script tag
echo "<script>var wordsArrays = $wordsArrays;</script>";
?>
