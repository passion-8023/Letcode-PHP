<?php
/*
 * PHP强化 —— 字符串
 */

//单双引号自行补充，不在赘述，如果这都不知道，那我只能说，卧槽无情。。。

// heredoc 语法结构 => 进行行解析
//$a = 'this is php';
//$doc = <<<EOD
//这是heredoc语法结构</br>
//它主要的就是最开始的</br>
//原格式输出 $a;
//EOD;
//var_export($doc);

// nowdoc 语法结构 => 不进行行解析
//$str = <<<'EOD'
//Example of string
//spanning multiple lines
//using nowdoc syntax.
//EOD;
//var_export($str);
//
//var_export("哈哈哈哈哈，'$a'");

/*
 * 常用函数
 */
// substr 从某个索引开始截取一定长度的字符串子串
//$str = '0123456';
//$res = substr($str, 0, 3);
//var_export($res);

// substr_replace 替换字符串从某个索引开始的一定长度的子串
//$str = '0123456789';
//$str = ['1234333333333', 'wangxin111111'];
//$res = substr_replace($str, 'abcdefg', 2, 4);
//var_export($res);

//使用逗号或空格(包含" ", \r, \t, \n, \f)分隔短语
//$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
//print_r($keywords);


//$str = 'one|two|three|four';
//print_r(explode('|', $str));
//// 正数的 limit
//print_r(explode('|', $str, 2));
//// 负数的 limit（自 PHP 5.1 起）
//print_r(explode('|', $str, -1));

//$str = pack("A35A14A4", "The line of Unix", "Nosee", 18);
//var_dump($str);
//var_dump(strlen($str));
//
//$data = "The line of Unix";
//$str = str_pad(substr($data, 0, 3), 25, '_');
//var_dump($str);

//$text = "A very long woooooooooooord.";
//$newtext = wordwrap($text, 8, "❤", true);
//echo "$newtext\n";

//$res = log(100, 10);
//var_dump($res);


//$arr = [
//    [
//        'id' => 10,
//        'name' => 'Wechat'
//    ],
//    [
//        'id' => 6,
//        'name' => 'Alipay'
//    ],
//    [
//        'id' => 7,
//        'name' => 'zhihu',
//    ],
//    [
//        'id' => 2,
//        'name' => 'jingdong',
//    ],
//    [
//        'id' => 39,
//        'name' => 'dangdang',
//    ],
//];
//
//array_multisort(array_column($arr, 'id'), SORT_DESC, $arr);
//echo '<pre>';
//var_dump($arr);


//$arrFirst = [
//    "first_key" => 1,
//    "second_key" => 1,
//    "third_key" => 1,
//];
//
//$arrSecond = [
//    "first_key" => 2,
//    "second_key" => 2,
//    "fourth_key" => 2,
//];
//
////对于重复的字符串键，array_merge后，后面数组的键值会覆盖前面的
//echo sprintf("\narray_merge result：\n%s", print_r(array_merge($arrFirst, $arrSecond), true));
//
////对于重复的字符串键，+操作后，前面数组的键值会覆盖后面的
//echo sprintf("\narray + result：\n%s", print_r($arrFirst + $arrSecond, true));
//
////对于重复的字符串键，array_merge_recursive后，相同键名的键值会被合并到同一数组中（会递归）
//echo sprintf("\narray_merge_recursive result：\n%s", print_r(array_merge_recursive($arrFirst, $arrSecond), true));


//$arrFirst = [
//    111 => "first",
//    222 => "first",
//    "first" //会指定默认的数字键223
//];
//
//$arrSecond = [
//    111 => "second",
//    333 => "second",
//    "second" //会指定默认的数字键334
//];
//
////对于重复的数字键，+操作后，前面数组的键值会覆盖后面的，保留之前数字键
//echo sprintf("\narray + result：\n%s", print_r($arrFirst + $arrSecond, true));
//
////对于重复的数字键，array_merge后，重排数字键，不会覆盖
//echo sprintf("\narray_merge result：\n%s", print_r(array_merge($arrFirst, $arrSecond), true));
//
////对于重复的数字键，array_merge_recursive后，重排数字键，不会覆盖
//echo sprintf("\narray_merge_recursive result：\n%s", print_r(array_merge_recursive($arrFirst, $arrSecond), true));
//


//$arr = ['a' => 'php', 'b' => 'go', 'c' => 'python'];
//extract($arr);
//echo "\$a = $a; \$b = $b; \$c = $c";
//
//$val1 = "wx";
//$val2 = "hh";
//$val3 = "mr";
//
//$newArr = compact("val1", "val2", "val3");
//print_r($newArr);


$arr = [1, 2, 3, 4, 5, 6];

//array_slice($arr,0,3); //可以将数组中的一段取出，此函数忽略键名

//array_splice($arr,1,0, ['wangxin']); //可以将数组中的一段取出，与上个函数不同在于返回的序列从原数组中删除

//$newarr = array_chunk($arr,3); //可以将一个数组分割成多个，TRUE为保留原数组的键名

//echo "<pre>";
//print_r($newarr);

//$newarr = array_pad($arr, 10, 'x');
//
//echo "<pre>";
//print_r($newarr);

//数组与栈（FILO）
//$num = array_push($arr,"apple","pear"); //将一个或多个元素压入数组栈的末尾（入栈），返回入栈元素的个数
//var_dump($num);
//$element = array_pop($arr); //将数组栈的最后一个元素弹出（出栈）
//var_dump($element);
//
////数组与队列（FIFO）
//array_shift($arr); //数组中的第一个元素移出并作为结果返回（数组长度减1，其他元素向前移动一位，数字键名改为从零技术，文字键名不变）
//
//array_unshift($arr,"a",array(1,2)); //在数组的开头插入一个或多个元素

//function getValue($value, $key, $p) {
//    echo "$key $p $value \n";
//}
//
//array_walk($arr,'getValue','的值是'); //使用用户函数对数组中的每个成员进行处理（第三个参数传递给回调函数function）

$arr1 = [1, 2, 3, 4, 5, 6, 7];
$arr2 = [0, 0, 0, 0, 0, 0, 0];

function sum($val1, $val2) {
    return $val1 + $val2;
}

$newArr = array_map("sum", $arr1, $arr2); //可以处理多个数组（当使用两个或更多数组时，他们的长度应该相同）
echo "<pre>";
print_r($newArr);
//
//array_filter($arr,"function"); //使用回调函数过滤数组中的每个元素，如果回调函数为TRUE，数组的当前元素会被包含在返回的结果数组中，数组的键名保留不变
//
//array_reduce($arr,"function","*"); //转化为单值函数（*为数组的第一个值）




