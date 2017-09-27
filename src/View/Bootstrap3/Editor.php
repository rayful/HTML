<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 下午10:47
 */

namespace rayful\HTML\View\Bootstrap3;


use rayful\HTML\Element\div;

class Editor extends \rayful\HTML\View\Base\Editor
{
    protected function getTips($tipsText)
    {
        return new Tips($tipsText);
    }

    protected function getInput($name, $value)
    {
        return new Input($name, $value);
    }

    protected function getSelect($name, $data, $value)
    {
        return new Select($name, $data, $value, true);
    }

    protected function getMultiSelect($name, $data, $value)
    {
        return new MultiSelect($name."[]", $data, $value, false);
    }

    protected function getFile($name)
    {
        return new File($name);
    }

    protected function getMultiFile($name)
    {
        return new MultiFile($name."[]");
    }

    protected function getPassword($name, $value)
    {
        return new Password($name, $value);
    }

    protected function getCheckboxes($name, $data, $value)
    {
        return new Checkboxes($name."[]", $data, $value);
    }

    protected function getCheckboxesInline($name, $data, $value)
    {
        return new div(new CheckboxesInline($name."[]", $data, $value));
    }

    protected function getRadios($name, $data, $value)
    {
        return new Radios($name, $data, $value);
    }

    protected function getRadiosInline($name, $data, $value)
    {
        return new div(new RadiosInline($name, $data, $value));
    }

    protected function getTextarea($name, $value)
    {
        return new Textarea($name, $value);
    }

    protected function getCheckboxBool($name, $label, $value)
    {
        return new div(new CheckboxBool($name, $label, $value));
    }

    protected function getRadiosBool($name, $value)
    {
        return new div(new RadiosBool($name, $value));
    }
}