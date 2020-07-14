<?php
/**
 * Created by PhpStorm.
 * User: leaboy
 * Date: 2020/7/14
 * Time: 12:18 PM
 */
require dirname(__DIR__) . '/src/IpLocationExport.php';

use itbdw\Ip\IpLocationExport;

$ex = new IpLocationExport();
$ex->export('./qqwry.txt');