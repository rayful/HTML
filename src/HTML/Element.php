<?php

namespace rayful\Tool\HTML;
use rayful\Tool\objectTool;

/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: 上午10:35
 */
abstract class Element
{
    use objectTool;
    public $class;

    function __construct($data = [])
    {
        $this->set($data);
    }

    function __toString()
    {
        ob_start();
        $this->display();
        return ob_get_clean();
    }

    /**
     * 获取属性值HTML的方法。
     * @return \Generator
     */
    public function attributes()
    {
        foreach ($this->toArray() as $key => $value) {
            if (!is_null($value)) {
                yield $key => $value;
            }
        }

    }

    /**
     * 获取attributes的HTMLString
     * @return string
     */
    protected function attributesHTMLString()
    {
        foreach ($this->attributes() as $key => $value) {
            $attributes[] = "{$key}=\"{$value}\"";
        }

        return isset($attributes) ? " " . implode(" ", $attributes) : "";
    }

    /**
     * 这个返回标签名称,如:select,input,label,option,input
     * @return string
     */
    abstract protected function tagName();

    /**
     * 默认的输出方法
     * @return void
     */
    abstract public function display();

} 