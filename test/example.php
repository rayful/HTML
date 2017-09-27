<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/10
 * Time: 下午3:08
 */
require "autoload.php";

$a = new \rayful\HTML\Element\a();
$a->appendContent("hello world");
echo $a;

echo PHP_EOL.PHP_EOL;

$a = new \rayful\HTML\Element\a("hello world 2");
$a->href = "http://abc.com";
echo $a;

echo PHP_EOL.PHP_EOL;

//一个一个select进去的方法
$select = new \rayful\HTML\Element\select();
$select->name = "sort[type]";
$select->class = "form-control";
$select->setContent(new \rayful\HTML\Generator\BlankOption());
$select->appendContent(new \rayful\HTML\Generator\Options(['0'=>'默认', '1' => '正序', '-1' => '反序'], 0));
echo $select;

echo PHP_EOL.PHP_EOL;

//简单的输出方法，最后一个参数为是否输出空白的下拉元素
$select = new rayful\HTML\Generator\Select("sort[type]", ['1' => '正序', '-1' => '反序'], '1', true);
$select->class = "form-control";
echo $select;

echo PHP_EOL.PHP_EOL;

//再简单一点，直接已经封装成Bootstrap支持的CSS的元素
$select = new \rayful\HTML\View\Bootstrap3\Select("sort[type]", ['1' => '正序', '-1' => '反序'], '1', true);
echo $select;

echo PHP_EOL.PHP_EOL;

//Bootstrap4直接继承Bootstrap3（没有区别）
$select = new \rayful\HTML\View\Bootstrap4\Select("sort[type]", ['1' => '正序', '-1' => '反序'], '1', true);
echo $select;

echo PHP_EOL.PHP_EOL;

//多选框
$multiSelect = new \rayful\HTML\View\Bootstrap3\MultiSelect("type", ['1' => '增加', '2' => '减少'], '1');
echo $multiSelect;

echo PHP_EOL.PHP_EOL;

$input = new \rayful\HTML\View\Bootstrap3\Input("email");
echo $input;

echo PHP_EOL.PHP_EOL;

$data = ['1'=>'男','2'=>'女'];

//多选框
echo new \rayful\HTML\Generator\Checkboxes("genders[]", $data);

echo PHP_EOL;

//单选按钮
echo new \rayful\HTML\Generator\Radios("gender", $data);

echo PHP_EOL;

//带CSS样式的多选/单选
echo new \rayful\HTML\View\Bootstrap3\Checkboxes("genders[]", $data);

echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap3\CheckboxesInline("genders[]", $data);

echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap3\Radios("gender", $data);

echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap3\RadiosInline("gender", $data);

echo PHP_EOL;echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap4\Checkboxes("genders[]", $data);

echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap4\CheckboxesInline("genders[]", $data);

echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap4\Radios("gender", $data);

echo PHP_EOL;

echo new \rayful\HTML\View\Bootstrap4\RadiosInline("gender", $data);

echo PHP_EOL;

