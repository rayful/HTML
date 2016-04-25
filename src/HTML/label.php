<?php
namespace rayful\Tool\HTML;


/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: ����11:36
 */
class label extends ElementContent
{
    public $id;
    public $for;

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
        return "label";
    }
}