<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 16-2-29
 * Time: 下午7:16
 */

namespace rayful\Tool\HTML;



class li extends ElementContent
{

    /**
     * 这个返回标签名称,如:select,input,label,option,input
     * @return string
     */
    protected function tagName()
    {
        return "li";
    }
}