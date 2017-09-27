<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/26
 * Time: 下午10:01
 */

namespace rayful\HTML\View\Bootstrap4;


class RadiosBool extends RadiosInline
{

    /**
     * Radios constructor.
     * @param $name string
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->data = ['1'=>'是','0'=>'否'];
    }
}