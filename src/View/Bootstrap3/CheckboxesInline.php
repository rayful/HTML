<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午7:47
 */

namespace rayful\HTML\View\Bootstrap3;


use rayful\HTML\Generator\Checkboxes;

class CheckboxesInline extends Checkboxes
{
    public function getDisplayIterator()
    {
        foreach (parent::getDisplayIterator() as $label) {
            $label->class = "checkbox-inline";
            yield $label;
        }
    }
}