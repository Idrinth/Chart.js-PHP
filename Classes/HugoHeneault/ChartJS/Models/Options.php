<?php

namespace HugoHeneault\ChartJS\Models;

abstract class Options implements \JsonSerializable {
    private function getNoneStaticDefaultProperties() {
        $reflection = new \ReflectionClass(get_class($this));
        $properties = $reflection->getDefaultProperties();
        foreach(array_keys($reflection->getStaticProperties()) as $name) {
            unset($properties[$name]);
        }
        return $properties;
    }
    public function jsonSerialize() {
        $list = array();
        foreach($this->getNoneStaticDefaultProperties() as $property => $value) {
            if(is_object($value) || $value !== $this->{$property}) {
                $list[$property] = $this->{$property};
            }
        }
        foreach(explode('.',$this->getPosition()) as $position) {
            if(strlen($position) > 0) {
                $list = array($position => $list);
            }
        }
        return $list;
    }
    /**
     * @return string a dot seperated list of keys
     */
    abstract public function getPosition();
}