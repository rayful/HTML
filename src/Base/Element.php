<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/10
 * Time: 上午10:12
 */

namespace rayful\HTML\Base;


use rayful\Tool\objectTool;

abstract class Element
{
    use objectTool;

    public $id;

    public $class;

    /**
     * 标签名称
     * @var string
     */
    protected $_tag;

    /**
     * 可以通过构造函数把属性和值设入DOM Element
     * @param array $data
     */
    public function __construct($data = [])
    {
        if ($data) {
            $this->setAttributes($data);
        }
    }

    public function __toString()
    {
        ob_start();
        $this->display();
        return ob_get_clean();
    }

    /**
     * 默认的输出方法，分别void及common的都不一样。
     * @return void
     */
    abstract public function display();

    /**
     * 获取属性值HTML的方法。
     * @return array
     */
    public function getAttributes()
    {
        return iterator_to_array($this->travelAttributes());
    }

    public function setAttributes($data)
    {
        $this->set($data);
    }

    /**
     * 获取attributes的HTML String
     * @return string
     */
    protected function getAttributesHTMLString()
    {
        foreach ($this->travelAttributes() as $key => $value) {
            $attributes[] = "{$key}=\"{$value}\"";
        }

        return isset($attributes) ? " " . implode(" ", $attributes) : "";
    }

    protected function travelAttributes()
    {
        foreach ($this->toArray() as $key => $value) {
            if (!is_null($value)) {
                yield $key => $value;
            }
        }
    }

    /**
     * 这个返回标签名称,默认是这个类的名称，如果不是，可以重写。
     * 如:select,input,label,option,input
     * @return string
     */
    protected function getTag()
    {
        if (is_null($this->_tag)) {
            $class = get_called_class();
            $path = explode('\\', $class);
            $this->_tag = array_pop($path);
        }
        return $this->_tag;
    }
}