<?php
require_once('app/Http/Code_12/Solution.php');
require_once('app/Http/Code_17/Solution.php');
require_once('app/Http/Code_18/Solution.php');
require_once('app/Http/Code_19/Solution.php');
require_once('app/Http/Code_19/Test.php');
require_once('app/Http/Code_20/Solution.php');
require_once('app/Http/Code_20/Solution_1.php');
require_once('app/Http/Code_22/Solution.php');

//use App\Http\Code_12\Solution as Code_12;
//$num = 1945;
//$code_12 = new Code_12();
//$res = $code_12->intToRoman($num);
//var_export($res);

//use App\Http\Code_17\Solution as Code_17;
//$digits = '26765';
//$code_17 = new Code_17();
//$res = $code_17->letterCombinations($digits);
//var_export($res);

//use App\Http\Code_18\Solution as Code_18;
//$nums = [0,4,-5,2,-2,4,2,-1,4];
//$target = 12;
//$code_18 = new Code_18();
//$res =  $code_18->fourSum($nums, $target);
//echo "<pre>";
//print_r($res);

//use App\Http\Code_19\Test as test;
//$test = new test();
//$test->addElement($test->getNode(1, 'PHP', '世界上最好的语言'));
//$test->addElement($test->getNode(2, 'GO', '为并发而生的语言'));
//$test->addElement($test->getNode(6, 'JAVA', '不老之神'));
//$test->addElement($test->getNode(3, 'Python', '人工智能'));
//$test->addElement($test->getNode(3, 'Html', '人工智能'));
//$test->showElement();
//echo "</br>+++++++++++++++++++++++++++++++++++";
//$test->delElement(2);
//$test->showElement();
//echo "</br>+++++++++++++++++++++++++++++++++++";
//$test->updateElement($test->getNode(6, 'C#', 'C语言的改良版'));
//$test->showElement();

//use App\Http\Code_20\Solution as Code_20;
//$s = ")(){}";
//$code_20 = new Code_20();
//$res = $code_20->isValid($s);
//echo "<pre>";
//var_dump($res);

//use App\Http\Code_20\Solution_1 as Code_20_1;
//$s = ")((){}";
//$code_20_1 = new Code_20_1();
//$res = $code_20_1->isValid($s);
//echo "<pre>";
//var_dump($res);

//use App\Http\Code_22\Solution as Code_22;
//$n = 3;
//$code_22 = new Code_22();
//$res = $code_22->generateParenthesis($n);
//echo "<pre>";
//var_dump($res);



//对以下数组进行排序，
//arr = (
//[4,5,9,4,1],
// [11,14,9,6,20],
// [21,44,90,16,21],
// [16,34,99,600,230],
// [121,18,89,60,33]
//)
//期望结果：数组arr[0][0]为最大值，arr[4][4]为第二大，arr[0][1]为第三大，arr[4][3]为第四大，依此类推arr[2][2]为最小值
//arr = (
//[600, 121, 90, 60, 34],
// [21, 20, 16, 14, 9],
// [6, 4, 1, 4, 5],
// [9, 11, 16, 18, 21],
// [33, 44, 89, 99, 230]


$arr = [
    [4,5,9,4,1],
    [11,14,9,6,20],
    [21,44,90,16,21],
    [16,34,99,600,230],
    [121,18,89,60,33]
];
function arraySort($arr){
    $newArr = [];
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {
        $newArr = array_merge($newArr, $arr[$i]);
    }
    rsort($newArr);
    $len = count($newArr);
    $i = 0;
    $tmp = true;
    foreach ($arr as $key => $value) {
        foreach ($value as $k => $v) {
            $res[$key][$k] = $newArr[$i];
            if ($len % 2 == 0) {
                if ($i+1 == $len-1 && $tmp) {
                    $i++;
                    $tmp = false;
                    continue;
                }
            } else {
                if ($i == $len - 1 && $tmp) {
                    $i--;
                    $tmp = false;
                    continue;
                }
            }
            $tmp ? $i += 2 : $i -= 2;
        }
    }
    return $res;
}
echo "<pre>";
print_r(arraySort($arr));





















