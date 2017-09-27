<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午11:19
 */
require __DIR__ . "/../vendor/autoload.php";
spl_autoload_register(function ($className) {
    $className = str_replace("rayful\\HTML\\", "", $className);
    $fileName = str_replace("\\", "/", $className) . ".php";
    require(__DIR__ . "/../src/" . $fileName);
});

require __DIR__ . "/Product.php";
require __DIR__ . "/Enum.php";