<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 上午6:36
 */

namespace rayful\HTML\Generator;


use rayful\HTML\Element\label;
use rayful\HTML\Element\radio;
use Traversable;

class Radios implements \IteratorAggregate
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
     * 选中的值
     * @var string
     */
    protected $checked;

    /**
     * Radios constructor.
     * @param $name string
     * @param $data array
     * @param string|null $checked
     */
    public function __construct($name, $data, $checked = null)
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
            $radio = new radio();
            $radio->name = $this->name;
            $radio->value = $value;
            if (strval($radio->value) === strval($this->checked))
                $radio->checked = "checked";

            yield $label => $radio;
        }
    }

    public function getDisplayIterator()
    {
        foreach ($this->getIterator() as $text => $radio) {
            $label = new label($radio . PHP_EOL . $text);
            yield $label;
        }
    }

    public function __toString()
    {
        return implode(PHP_EOL, iterator_to_array($this->getDisplayIterator()));
    }
}