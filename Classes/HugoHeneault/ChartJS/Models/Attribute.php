<?php

namespace HugoHeneault\ChartJS\Models;

class Attribute {
    private $name;
    private $value;
    public function __construct($name,$value = false) {
        $this->name = $name;
        $this->value = str_replace('"','&quot;',$value);
    }
    public function __toString() {
        if($this->value === false) {
            return $this->name;
        }
        return $this->name . '="' . $this->value . '"';
    }
    public function getName() {
        return $this->name;
    }
}