<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 下午11:23
 */

namespace rayful\HTML\View\Bootstrap4;


class CheckboxBool extends Checkboxes
{

    /**
     * CheckboxBool constructor.
     * @param string $name
     * @param string $label
     * @param mixed $value
     */
    public function __construct($name, $label, $value = null)
    {
        $this->name = $name;
        $this->checked = [$value];
        $this->data = ['1' => $label];
    }
}