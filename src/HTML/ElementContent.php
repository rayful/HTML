<?php
/**
 * 有内部内容的标签（大部分），如：div、table、p、span、label等
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-18
 * Time: 下午1:21
 */

namespace rayful\Tool\HTML;


abstract class ElementContent extends Element
{
    protected $_content;

    public function content()
    {
        return $this->_content;
    }

    /**
     * 设定内容
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->_content = $content;
    }

    /**
     * 追加内容
     * @param mixed $content
     */
    public function appendContent($content)
    {
        $this->_content.= $content;
    }

    /**
     * 默认的输出方法
     * @return void
     */
    public function display()
    {
        echo "<{$this->tagName()}{$this->attributesHTMLString()}>{$this->content()}</{$this->tagName()}>";
    }

} 