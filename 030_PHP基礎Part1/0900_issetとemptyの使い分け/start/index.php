<?php 
/*
 - isset
 変数が定義されていて、null以外の値の時にtrueを返す。
 
 - empty
 issetがfalse、または値がfalsyな時にtrueを返す。

 !isset($val) || $val == false

 - falsyな値
 "" (空文字)
 0 (数値、文字列)
 NULL
 FALSE
*/

$a = 0;
$b = 1;

if(isset($a)) {
  echo 'true';
} else {
  echo 'false';
}

if(!empty($a)) {
  echo 'true';
} else {
  echo 'false';
}

if(!isset($a) || $a == false) {
  echo 'true';
} else {
  echo 'false';
}
var_dump(!isset($a));