<?php

//NUMBER OF WORDS
//----------------
if(isset($_POST['count'])){
if (($_POST['count'])>0) {
    $count = $_POST['count'];
    } else { 
        $count = 1;  // setting default number of words to 1
    }
}
else { 
        $count = 1;  // setting default number of words to 1
    }
//UPPERCASE?
//----------
if (isset($_POST['uppercase'])) {
    $uppercase = true;
    } else {
    $uppercase = false;
}

// ADD a SYMBOL?
//--------------
if (isset($_POST['symbol'])) {
    $symbol = true;
    } else {
    $symbol = false;
}

//ADD a NUMBER?
//-------------
if (isset($_POST['number'])) {
    $number = true;
    } else {
    $number = false;
}

//"file" converts the file words.txt into an array
if (($words = file('words.txt'))) {
    $selected_words = [];
        
    for ($i = 0; $i < $count; $i++) {
//      Generate random number from 0 to dictionary size
        $max = count($words)-1;
        $rand = rand(0,$max);
        
         //rtrim because the file function adds a space at the end of the words
        $word = rtrim($words[$rand]);
        array_push($selected_words, $word);
    }
    
//    Change first letter into UPPERCASE
//    ***********************************
    if ($uppercase) {
//        loop through words and change the first letter to uppercase:
        foreach($selected_words as $index => $word) {
            $selected_words[$index] = ucfirst($word);
        }
    }

//    INSERT A SYMBOL
//    ***************
    if ($symbol) {
        $symbolList = ["`", "~", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "-", "+", "=", "{", "}", "[", "]", "\\", "\|", "\:", ";", "\"", "<", ">", ",", ".", "?", "/"];
        $maxSymbols = count($symbolList)-1;
        $rand = rand(0,$maxSymbols);
        
        $newSymbol = $symbolList[$rand];
        array_push($selected_words, $newSymbol);

//        str_replace()
//    insert a value at a certain index
    }

//    INSERT A NUMBER
//    ***************
    if ($number) {
        $numberList = [0,1,2,3,4,5,6,7,8,9];
        $maxList = count($numberList)-1;
        $rand = rand(0, $maxList);

        $newNumber = $numberList[$rand];
        array_push($selected_words, $newNumber);

    }
    
//Put it all into an actual password
    $password = implode("-", $selected_words);
}