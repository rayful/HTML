<?php

namespace rayful\Tool\HTML;

/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 14-5-14
 * Time: ����10:23
 */
class checkbox extends input
{
    public $type = "checkbox";
    public $id;
    public $checked;

    /**
     * @param $name
     * @param $data
     * @param $checked_values
     * @return \Generator
     */
    public static function generator($name, $data, $checked_values)
    {
        foreach ($data as $value => $text) {
            $checkbox = new checkbox();
            $checkbox->name = $name;
            $checkbox->value = $value;
            $checkbox->id = $checkbox->name . "_" . $checkbox->value;
            if ($checked_values && in_array((string)$checkbox->value, $checked_values))
                $checkbox->checked = "checked";

            $label = new label($text);
            $label->for = $checkbox->id;

            yield $checkbox . $label;
        }
    }

    public static function loop_display($name, $data, $checked_values)
    {
        foreach (self::generator($name, $data, $checked_values) as $content) {
            echo $content;
        }
    }
} 