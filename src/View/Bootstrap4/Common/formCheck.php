<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午8:17
 */

namespace rayful\HTML\View\Bootstrap4\Common;


use rayful\HTML\Element\div;
use rayful\HTML\Element\label;

trait formCheck
{
    public function getDisplayIterator()
    {
        foreach ($this->getIterator() as $text => $checkElement) {

            $div = new div();
            $div->class = $this->getDivClass();

            $checkElement->class = "form-check-input";

            $label = new label($checkElement . PHP_EOL . $text);
            $label->class = "form-check-label";

            $div->setContent($label);

            yield $div;
        }
    }

    protected function getDivClass()
    {
        return "form-check";
    }

    abstract public function getIterator();
}