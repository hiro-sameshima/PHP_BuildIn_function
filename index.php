<?php

$name = 'Apple';
$score = 32.246;

$info = "[$name][$score]";

echo $info . PHP_EOL;
//[Apple][32.246]



$info = sprintf("[%15s][%10.2f]",  $name , $score);

echo $info . PHP_EOL;
//[          Apple][     32.25]


/*
上記のような値を埋め込む際、データ型に応じた記号を指定する↓
  文字列  →$s
  整数    →$d
  浮動小数点数　→　%f
以上の指定を行い、更に桁数の指定を行う↓
$info = sprintf("[%15s][%10.2f]",  $name , $score);↓
"[%15桁の文字列][%10桁の数字と小数点を2桁]" , $nameを表示　, $scoreを表示
*/