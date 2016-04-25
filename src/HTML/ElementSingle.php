<?php
/**
 * 没有内容的标签，如：input、img等
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-18
 * Time: 下午1:20
 */

namespace rayful\Tool\HTML;


abstract class ElementSingle extends Element
{
    /**
     * 默认的输出方法
     * @return void
     */
    public function display()
    {
        echo "<{$this->tagName()}{$this->attributesHTMLString()} />";
    }

} 