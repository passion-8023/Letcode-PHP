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


$arr = [
    [
        'id' => 10,
        'name' => 'Wechat'
    ],
    [
        'id' => 6,
        'name' => 'Alipay'
    ],
    [
        'id' => 7,
        'name' => 'zhihu',
    ],
    [
        'id' => 2,
        'name' => 'jingdong',
    ],
    [
        'id' => 39,
        'name' => 'dangdang',
    ],
];

array_multisort(array_column($arr, 'id'), SORT_DESC, $arr);
echo '<pre>';
var_dump($arr);










