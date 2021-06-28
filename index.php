<?php
require_once('app/Http/Code_12/Solution.php');
require_once('app/Http/Code_17/Solution.php');

//use App\Http\Code_12\Solution as Code_12;
//$num = 1945;
//$code_12 = new Code_12();
//$res = $code_12->intToRoman($num);
//var_export($res);

use App\Http\Code_17\Solution as Code_17;
$digits = '26765';
$code_17 = new Code_17();
$res = $code_17->letterCombinations($digits);
var_export($res);



