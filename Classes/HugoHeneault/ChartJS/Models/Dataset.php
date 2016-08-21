<?php

namespace HugoHeneault\ChartJS\Models;

abstract class Dataset implements \JsonSerializable {
    protected $options = array();
    public function jsonSerialize() {
        return $this->options;
    }
    abstract protected function getColorFields();
    public function setColor(Color $color) {
        foreach($this->getColorFields() as $field) {
            $this->options[$field . 'Color'] = $color->{'get' . strtoupper($field{0}) . substr($field,1)}();
        }
    }
    public function __construct($label,array $data,array $options = array()) {
        $this->options = $options;
        $this->options['data'] = $data;
        $this->options['label'] = $label;
    }
}