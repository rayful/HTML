<?php
namespace rayful\Tool\HTML;


/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: 上午10:23
 */
class input extends ElementSingle
{
    public $type = "text";
    public $name;
    public $value;

    protected function tagName()
    {
        return "input";
    }
} 