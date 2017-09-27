<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午8:12
 */

namespace rayful\HTML\View\Bootstrap3;


use rayful\HTML\Generator\Radios;

class RadiosInline extends Radios
{
    public function getDisplayIterator()
    {
        foreach (parent::getDisplayIterator() as $label) {
            $label->class = "radio-inline";
            yield $label;
        }
    }
}