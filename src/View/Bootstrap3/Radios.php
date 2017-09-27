<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午8:11
 */

namespace rayful\HTML\View\Bootstrap3;


use rayful\HTML\Element\div;

class Radios extends \rayful\HTML\Generator\Radios
{
    public function getDisplayIterator()
    {
        foreach (parent::getDisplayIterator() as $label) {
            $div = new div();
            $div->class = "radio";
            $div->setContent($label);
            yield $div;
        }
    }
}