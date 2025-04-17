<?php

// primo esercizio

// $integer = 24;
// $float = 5.6;
// $string = 'ciao ciao';
// $bol = true;

// var_dump($integer, $float, $string, $bol);

// const INTERI  = 10;
// const NUMERICONVIRGOLA = 2.5;
// const STRINGA = 'Ciao sono una stringa';
// const BOOOL = true;



// var_dump(INTERI, NUMERICONVIRGOLA, STRINGA, BOOOL);


// fine primo esercizio 

// secondo esercizio

// $text1 = "Marco";
// $text2 = "hai";
// $text3 = "sete";
// $text4 = "?";
// $text5 = "Perchè";
// $text6 = $text2;
// $text7 = 'bevuto';
// $text8 = "tutto";

// echo $text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8;


// fine secondo esercizio

// terzo esercizio



$words1 = [ 'vostro', 'Nel', 'smarrita','colle','mi','sempre',['oscura','era','di',['mezzo','E'],'ritrovai','per'],'diritta','che'];
  
$words2 = ['elemento1' => 'cammin','elemento2' => 'nostra','elemento3' => ['via','vita','una',['selva']],'fine' => 'la'];


$results = $words1[1] . " " . $words1[6][3][0] ." " .  $words1[6][2] . " " . $words2['elemento1']. " " .  $words1[6][2] . " " . $words2['elemento2'] . " " . $words2['elemento3'][1] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words2['elemento3'][2] . " " . $words2['elemento3'][3][0] . " " . $words1[6][0] . ", " . $words1[8] . " " . $words2['fine'] . " " .  $words1[7] . " " . $words2['elemento3'][0] . " " . $words1[6][1] ." " . $words1[2] . ".";

echo $results;

// fine terzo esercizio
