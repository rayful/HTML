<?php
/**
 * 只有开始标签，没有结束标签的元素。
 * 比如：input、img
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/10
 * Time: 上午10:11
 */

namespace rayful\HTML\Base;


class ElementVoid extends Element
{

    /**
     * 默认的输出方法，分别void及common的都不一样。
     * @return void
     */
    public function display()
    {
        echo "<{$this->getTag()}{$this->getAttributesHTMLString()}>";
    }
}