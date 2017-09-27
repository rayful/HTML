<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-9-4
 * Time: 上午8:18
 */
namespace rayful\HTML\Element;

class radio extends input
{
    protected $_tag = "input";

    public $type = "radio";

    public $checked;
} 