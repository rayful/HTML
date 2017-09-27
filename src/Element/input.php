<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: 上午10:23
 */
namespace rayful\HTML\Element;

use rayful\HTML\Base\ElementVoid;

class input extends ElementVoid
{
    public $type = "text";
    public $name;
    public $value;
} 