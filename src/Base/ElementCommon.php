<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/10
 * Time: 上午10:13
 */

namespace rayful\HTML\Base;


class ElementCommon extends Element
{
    protected $_content;

    /**
     * ElementCommon constructor.
     * @param mixed $content
     */
    public function __construct($content = null)
    {
        $this->setContent($content);
    }


    public function getContent()
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
        $this->_content .= $content;
    }

    /**
     * 默认的输出方法，分别void及common的都不一样。
     * @return void
     */
    public function display()
    {
        echo "<{$this->getTag()}{$this->getAttributesHTMLString()}>{$this->getContent()}</{$this->getTag()}>";
    }
}