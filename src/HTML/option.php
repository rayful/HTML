<?php
namespace rayful\Tool\HTML;


/**
 * 获取option的html
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: 上午10:23
 */
class option extends ElementContent
{
    public $value;
    public $selected;

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
        return "option";
    }

    public static function blank()
    {
        $option = new option("--");
        $option->value = "";
        return $option;
    }

    /**
     * 静态调用，默认的输出option的方法。
     * @param array|option[]|\Generator $data
     * @param mixed $selected_value
     * @return string $content
     */
    public static function loop($data, $selected_value)
    {
        $content = "";
        foreach ($data as $key => $value) {

            if ($value instanceof option) {
                $option = $value;
            } else {
                $option = new option($value);
                $option->value = $key;
            }

            if ((string)$option->value === (string)$selected_value)
                $option->selected = "selected";

            $content .= $option;
        }
        return $content;
    }
}