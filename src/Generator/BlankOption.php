<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/21
 * Time: 下午9:51
 */

namespace rayful\HTML\Generator;


use rayful\HTML\Element\option;

class BlankOption extends option
{
    protected $_tag = "option";

    /**
     * BlankOption constructor.
     */
    public function __construct()
    {
        $this->value = "";
        parent::__construct("--");
    }

}