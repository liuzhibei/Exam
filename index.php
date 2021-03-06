<?php

define('BASE_DIR', __DIR__);
include_once BASE_DIR . '/Lzb/Autoload.php';
spl_autoload_register('Lzb\\Autoload::autoload');
require_once BASE_DIR . '/Lzb/Lzb.php';
echo '<pre>';
/*
 *1. 整数反转题目，三十二位的有符号整数，输出反转
 *后的结果，如果果反转后溢出，则输出0。
*/
//echo \App\Controller\Algorithm\AlgorithmController::intRev(0);

/*
 * 2. 返回字符串中的最大回文子串。
 */
//echo App\Controller\Algorithm\AlgorithmController::zuidahuiwenzichuan('caba');

/*
 * 3. 工厂模式(Lzb\Factory类中有工厂方法）
 * +单例模式（暂时没有了单例模式）
 * +适配器模式（Lzb\Database\Mysqli类和Lzb\Database\Pdo类）
 * +注册数模式（Lzb\Factory类中使用与工厂模式合并）
 * +数据对象映射模式（App\Orm\User类)
 * +迭代器模式（App\Orm\UserAll类)
 */

//$user = new \App\Orm\User(1);
//$user->name = 'bbb';
//var_dump($user);

//$users = new \App\Orm\UserAll();
//foreach ($users as $user) {
//    echo $user->id, $user->name , '<br/>';
//}

/*
 * 4. 排序算法
 */
//$arr = range(1, 50, 3);
//shuffle($arr);
//print_r($arr);
//echo '<pre>';
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::bubbleSort($arr));
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::bubbleSortTwo($arr));
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::bubbleSortThree($arr));
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::quickSort($arr, 0, 16));

/*
 * 5.数组函数(数组如果定义重复键值，后面的会覆盖前面的）
 */

//\App\Controller\PhpFunction\ArrayFunction::array_search();

/*
 * 6. 字符串函数
 */
//\App\Controller\PhpFunction\StringFunction::serialize();

/**
 * 7. 链表
 */
//\App\Controller\LinkList\LinkList::reverse();

/**
 * 8. 递归
 */
//$res = \App\Controller\Algorithm\AlgorithmRecursionController::upstairs(3);
//var_dump($res);
//$repeat = [];
//while (count($all) > 0) {
//   $item = array_pop($all);
//   if (!in_array($item, $ok)) {
//       $repeat[] = $item;
//   }
//}
$a = [43,545,42,23,4,23,4,2,1,53,34,344,32,323,32432,234,34,34,3,434,4,34];
\App\Controller\Algorithm\AlgorithmSorController::quickSort($a, 0, 21);
var_dump($a);