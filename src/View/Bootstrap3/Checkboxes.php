<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午7:03
 */

namespace rayful\HTML\View\Bootstrap3;


use rayful\HTML\Element\div;

class Checkboxes extends \rayful\HTML\Generator\Checkboxes
{
    public function getDisplayIterator()
    {
        foreach (parent::getDisplayIterator() as $label) {
            $div = new div();
            $div->class = "checkbox";
            $div->setContent($label);
            yield $div;
        }
    }
}