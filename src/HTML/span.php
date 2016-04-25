<?php
namespace rayful\Tool\HTML;


/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-16
 * Time: 上午5:45
 */
class span extends ElementContent
{
    public $id;
    public $class;
    public $style;

    function __construct($content = null)
    {
        if (!is_null($content)) {
            $this->_content = $content;
        }
    }

    /**
     * 这个返回标签名称,如:select,input,label,option,input
     * @return string
     */
    protected function tagName()
    {
        return "span";
    }
}