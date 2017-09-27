<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午11:05
 */

namespace rayful\HTML\Generator;


use rayful\HTML\Element\input;

class Password extends input
{
    protected $_tag = "input";

    public $type = "password";

    /**
     * Password constructor.
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
        $this->id = $name;
    }


}