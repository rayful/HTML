<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/9/23
 * Time: 下午10:47
 */

namespace rayful\HTML\View\Base;


use rayful\Tool\ReflectionPropertyX;
use Traversable;

abstract class Editor implements \IteratorAggregate
{
    /**
     * @var ReflectionPropertyX[]
     */
    protected $properties = [];

    protected $object;

    /**
     * Editor constructor.
     */
    public function __construct($object)
    {
        $this->object = $object;
        foreach ($object as $key => $value) {
            $property = new ReflectionPropertyX($object, $key);
            $this->properties[] = $property;
        }
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
        foreach ($this->properties as $property) {
            $key = $property->getName();
            $label = $property->getTag("label") ?: $key;
            $input = $property->getTag("input");
            if (is_null($input)) continue;

            if ($inputText = $this->getInputText($property)) {
                yield $label => $inputText;
            }
        }
    }

    protected function getInputText(ReflectionPropertyX $property)
    {
        $input = $this->getFullInput($property);
        $tips = $this->getFullTips($property);
        return $input . $tips;
    }

    protected function getFullTips(ReflectionPropertyX $property)
    {
        $tips = $property->getTag("tips");
        return $this->getTips($tips);
    }

    protected function getFullInput(ReflectionPropertyX $property)
    {
        $label = $property->getTag("label");
        $input = $property->getTag("input");
        $data = [];
        $dataCode = $property->getTag("data");
        if($dataCode){
            eval("\$data = {$dataCode};");
        }
        $name = $property->getName();
        $value = $property->getValue($this->object);

        switch (strtolower($input)) {
            case "":
            case "input":
            case "text":
                return $this->getInput($name, $value);
                break;

            case "select":
                return $this->getSelect($name, $data, $value);
                break;

            case "multiselect":
                return $this->getMultiSelect($name, $data, $value);
                break;

            case "file":
                return $this->getFile($name);
                break;

            case 'multifile':
                return $this->getMultiFile($name);

            case "password":
                return $this->getPassword($name, $value);
                break;

            case "checkbox":
            case "checkboxes":
                return $this->getCheckboxes($name, $data, $value);
                break;

            case "checkboxinline":
            case "checkboxesinline":
                return $this->getCheckboxesInline($name, $data, $value);
                break;

            case "radio":
            case "radios":
                return $this->getRadios($name, $data, $value);
                break;

            case "radioinline":
            case "radiosinline":
                return $this->getRadiosInline($name, $data, $value);
                break;

            case "textarea":
                return $this->getTextarea($name, $value);
                break;

            case "checkboxbool":
            case "checkboxesbool":
            case "checkboxboolean":
            case "checkboxesboolean":
                return $this->getCheckboxBool($name, $label, $value);
                break;

            case "bool":
            case "radiobool":
            case "radiosbool":
            case "boolean":
            case "radioboolean":
            case "radiosboolean":
                return $this->getRadiosBool($name, $value);
                break;

            default:
                return null;
                break;
        }
    }

    abstract protected function getTips($tipsText);

    abstract protected function getInput($name, $value);

    abstract protected function getSelect($name, $data, $value);

    abstract protected function getMultiSelect($name, $data, $value);

    abstract protected function getFile($name);

    abstract protected function getMultiFile($name);

    abstract protected function getPassword($name, $value);

    abstract protected function getCheckboxes($name, $data, $value);

    abstract protected function getCheckboxesInline($name, $data, $value);

    abstract protected function getRadios($name, $data, $value);

    abstract protected function getRadiosInline($name, $data, $value);

    abstract protected function getTextarea($name, $value);

    abstract protected function getCheckboxBool($name, $label, $value);

    abstract protected function getRadiosBool($name, $value);
}