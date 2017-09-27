<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/21
 * Time: 下午9:56
 */

namespace rayful\HTML\Generator;


class Select extends \rayful\HTML\Element\select
{
    protected $_tag = "select";

    /**
     * @param $name string
     * @param $data array
     * @param $selected string
     * @param $autoBlankFirst bool
     * select constructor.
     */
    public function __construct($name, $data, $selected = null, $autoBlankFirst = false)
    {
        $this->name = $name;
        $this->id = $name;
        $this->setContent($autoBlankFirst ? new BlankOption() : "");
        $this->appendContent(new Options($data, $selected));
    }
}