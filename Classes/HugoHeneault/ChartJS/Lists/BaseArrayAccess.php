<?php

namespace HugoHeneault\ChartJS\Lists;

abstract class BaseArrayAccess implements \ArrayAccess {
    /**
     *
     * @var array()
     */
    protected $list;
    /**
     *
     * @return string
     */
    abstract protected function getAllowedObjectType();
    /**
     *
     * @return void
     */
    abstract protected function addNew($object);
    /**
     *
     * @param int|string $offset
     * @return boolean
     */
    public function offsetExists($offset) {
        return isset($this->list[$offset]);
    }
    /**
     *
     * @param int|string $offset
     * @return mixed
     */
    public function offsetGet($offset) {
        return $this->list[$offset];
    }
    /**
     *
     * @param int|string $offset
     * @param object $value
     */
    public function offsetSet($offset,$value) {
        if(!is_subclass_of($value,$this->getAllowedObjectType()) && !is_a($value,$this->getAllowedObjectType())) {
            throw new \InvalidArgumentException("Values must be of type " . $this->getAllowedObjectType() . ", " . get_class($value) . " given.");
        }
        $this->list[$offset] = $value;
    }
    /**
     *
     * @param object $value
     */
    public function add($value) {
        if(!is_subclass_of($value,$this->getAllowedObjectType()) && !is_a($value,$this->getAllowedObjectType())) {
            throw new \InvalidArgumentException("Values must be of type " . $this->getAllowedObjectType() . ", " . get_class($value) . " given.");
        }
        $this->addNew($value);
    }
    /**
     *
     * @param int|string $offset
     */
    public function offsetUnset($offset) {
        unset($this->list[$offset]);
    }
}