<?php

define('BASE_DIR', __DIR__);
require BASE_DIR . '/Lzb/Autoload.php';
spl_autoload_register('Lzb\\Autoload::autoload');

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
 * 3. 工厂模式+单例模式
 */
//$database = \Lzb\Factory::getDatabase();
//echo $database->getHostUserPassword();

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