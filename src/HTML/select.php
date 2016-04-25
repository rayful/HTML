<?php
namespace rayful\Tool\HTML;


/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: 下午2:15
 */
class select extends ElementContent
{
    public $name;

    /**
     * 这个返回标签名称,如:select,input,label,option,input
     * @return string
     */
    protected function tagName()
    {
        return "select";
    }

    /**
     * 静态生成器，传三个变量：名称、选项集合、选中值
     * @param string $name
     * @param array $options
     * @param mixed $selected
     * @param bool $is_blank_first
     * @return select
     */
    public static function generator($name, $options, $selected, $is_blank_first = false)
    {
        $select = new select();
        $select->name = $name;
        $select->_content = $is_blank_first ? option::blank() : "";
        $select->_content .= option::loop($options, $selected ?: $_REQUEST[$name]);
        return $select;
    }

    public static function display_limit($default = null)
    {
        self::generator("limit", ['' => '默认', '100' => "100", '200' => "200", '300' => "300", '500' => "500"], $default)->display();
    }

    public static function display_sort_type($default = null)
    {
        $Select = self::generator("sort_type", ['-1' => "倒序", '1' => "正序"], $default);
        $Select->class = "form-control";
        $Select->display();
    }

    public static function gen_by_object_properties($object, $name = null)
    {
        $select = new select();
        if ($name) {
            $select->name = $name;
        }

        $options[''] = "--";
        foreach ($object as $key => $value) {
            $Property = new ReflectionPropertyX($object, $key);
            $options[$key] = $Property->_name;
        }

        $select->_content = option::loop($options, null);
        return $select;
    }
}