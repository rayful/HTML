<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/22
 * Time: 下午9:07
 */

namespace rayful\HTML\Generator;


use rayful\HTML\Element\checkbox;
use rayful\HTML\Element\label;
use Traversable;

class Checkboxes implements \IteratorAggregate
{
    /**
     * 多选框的名称
     * @var string
     */
    protected $name;

    /**
     * 值=>标签的集合
     * @var array
     */
    protected $data;

    /**
     * 选中的值（集合，因为是多选）
     * @var array
     */
    protected $checked;

    /**
     * Checkboxes constructor.
     * @param $name string
     * @param $data array
     * @param array $checked
     */
    public function __construct($name, $data, $checked = [])
    {
        $this->name = $name;
        $this->data = $data;
        $this->checked = $checked;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        foreach ($this->data as $value => $label) {
            $checkbox = new checkbox();
            $checkbox->name = $this->name;
            $checkbox->value = $value;
            if ($this->checked && in_array((string)$checkbox->value, $this->checked))
                $checkbox->checked = "checked";

            yield $label => $checkbox;
        }
    }

    public function getDisplayIterator()
    {
        foreach ($this->getIterator() as $text => $checkbox) {
            $label = new label($checkbox . PHP_EOL . $text);
            yield $label;
        }
    }

    public function __toString()
    {
        return implode(PHP_EOL, iterator_to_array($this->getDisplayIterator()));
    }
}