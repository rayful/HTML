<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/22
 * Time: 下午9:04
 */

namespace rayful\HTML\Generator;


class Label extends \rayful\HTML\Element\label
{
    protected $_tag = "label";

    /**
     * label constructor.
     * @param string $name
     * @param string $label
     */
    public function __construct($name, $label)
    {
        $this->for = $name;
        $this->setContent($label);
    }
}