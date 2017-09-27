<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午10:59
 */

namespace rayful\HTML\View\Bootstrap3;


class Textarea extends \rayful\HTML\Element\textarea
{
    public $class = "form-control";

    public $rows = 3;

    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->setContent($value);
    }


}