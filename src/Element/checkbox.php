<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: 10:23
 */
namespace rayful\HTML\Element;


class checkbox extends input
{
    protected $_tag = "input";

    public $type = "checkbox";

    public $checked;
} 