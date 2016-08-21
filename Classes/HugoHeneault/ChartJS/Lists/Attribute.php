<?php

namespace HugoHeneault\ChartJS\Lists;

class Attribute implements \Iterator, \ArrayAccess {
    /**
     *
     * @var \HugoHeneault\ChartJS\Models\Attribute[]
     */
    protected $attributes = array();
    /**
     *
     * @var string[]
     */
    protected $attributeKeys = array();
    /**
     *
     * @var int
     */
    protected $current;
    /**
     *
     * @return string
     */
    public function __toString() {
        $attributes = '';
        foreach($this->attributes as $attribute) {
            $attributes .= ' ' . $attribute->__toString();
        }
        return $attributes;
    }
    /**
     *
     * @return \HugoHeneault\ChartJS\Models\Attribute
     */
    public function current() {
        return $this->attributes[$this->key()];
    }
    /**
     * @return string
     */
    public function key() {
        return $this->attributeKeys[$this->current];
    }
    /**
     * @return void
     */
    public function next() {
        $this->current+=1;
    }
    /**
     *
     * @param string $offset
     */
    public function offsetExists($offset) {
        isset($this->attributes[$offset]);
    }
    /**
     *
     * @param string $offset
     * @return \HugoHeneault\ChartJS\Models\Attribute
     */
    public function offsetGet($offset) {
        return $this->attributes[$offset];
    }
    /**
     *
     * @param string $offset
     * @param \HugoHeneault\CHartJS\Models\Attribute $value
     */
    public function offsetSet($offset,$value) {
        if(!($value instanceof \HugoHeneault\ChartJS\Models\Attribute)) {
            throw new \InvalidArgumentException("Values must be of type \HugoHeneault\ChartJS\Models\Attribute, " . get_class($value) . " given.");
        }
        $this->attributes[$offset] = $value;
        if(!in_array($offset,$this->attributeKeys)) {
            $this->attributeKeys[] = $offset;
        }
    }
    /**
     *
     * @param string $offset
     */
    public function offsetUnset($offset) {
        unset($this->attributes[$offset]);
        unset($this->attributeKeys[array_keys($this->attributeKeys,$offset)[0]]);
    }
    /**
     * @return void
     */
    public function rewind() {
        $this->current = 0;
    }
    /**
     *
     * @return boolean
     */
    public function valid() {
        return $this->current >= 0 && $this->current < count($this->attributeKeys);
    }
}