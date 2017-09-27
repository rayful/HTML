<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午11:05
 */

namespace rayful\HTML\Generator;


use rayful\HTML\Element\input;

class File extends input
{
    protected $_tag = "input";

    public $type = "file";

    /**
     * File constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


}