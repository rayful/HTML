<?php
namespace rayful\Tool\HTML;


/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-9-4
 * Time: 上午8:18
 */
class radio extends input
{
    public $type = "radio";
    public $id;
    public $checked;

    public static function generator($name, $data, $selected_value)
    {
        foreach ($data as $value => $text) {
            $radio = new radio();
            $radio->name = $name;
            $radio->value = $value;
            if ((string)$radio->value === (string)$selected_value)
                $radio->checked = "checked";

            $label = new label();
            $label->class = "radio-inline"; //Fit Bootstrap Style
            $label->appendContent($radio);
            $label->appendContent($text);

            yield $label;
        }
    }

    public static function loop_display($name, $data, $checked_values)
    {
        foreach (self::generator($name, $data, $checked_values) as $content) {
            echo $content;
        }
    }

} 