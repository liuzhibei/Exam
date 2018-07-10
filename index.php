<?php

define('BASE_DIR', __DIR__);
require_once BASE_DIR . '/Lzb/Autoload.php';
spl_autoload_register('Lzb\\Autoload::autoload');
require_once BASE_DIR . '/Lzb/Lzb.php';

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

$user = new \App\Orm\User(1);
$user->name = 'bbb';
var_dump($user);

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
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::bubbleSort($arr));
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::bubbleSortTwo($arr));
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::bubbleSortThree($arr));
//var_dump(\App\Controller\Algorithm\AlgorithmSorController::quickSort($arr, 0, 16));

/*
 * 5.
 */