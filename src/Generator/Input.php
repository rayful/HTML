<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/22
 * Time: 下午1:48
 */

namespace rayful\HTML\Generator;


class Input extends \rayful\HTML\Element\input
{
    protected $_tag = "input";

    /**
     * @param $name string
     * @param $value string
     * input constructor.
     */
    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->id = $name;
        $this->value = $value;
    }
}