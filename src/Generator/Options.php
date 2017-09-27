<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/21
 * Time: 下午9:31
 */

namespace rayful\HTML\Generator;


use rayful\HTML\Element\option;
use Traversable;

class Options implements \IteratorAggregate
{
    private $data;

    private $selected;

    /**
     * options constructor.
     */
    public function __construct($data, $selected = null)
    {
        $this->data = $data;
        $this->selected = $selected;
    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     */
    public function getIterator()
    {
        foreach ($this->data as $key => $value) {

            $option = new option($value);
            $option->value = $key;

            if (!is_null($this->selected)){
                if(is_string($this->selected)){
                    if(strval($option->value) === strval($this->selected)) {
                        $option->selected = "selected";
                    }
                }elseif(is_array($this->selected)){
                    if(in_array(strval($option->value), $this->selected)){
                        $option->selected = "selected";
                    }
                }
            }

            yield $option;
        }
    }

    public function __toString()
    {
        return PHP_EOL . implode(PHP_EOL, iterator_to_array($this->getIterator())) . PHP_EOL;
    }
}