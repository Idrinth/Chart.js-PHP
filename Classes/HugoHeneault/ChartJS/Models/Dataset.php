<?php

namespace HugoHeneault\ChartJS\Models;

abstract class Dataset implements \JsonSerializable {
    /**
     *
     * @var array
     */
    protected $options = array();
    /**
     *
     * @return array
     */
    public function jsonSerialize() {
        return $this->options;
    }
    /**
     * @return string[]
     */
    abstract protected function getColorFields();
    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Color $color
     */
    public function setColor(Color $color) {
        foreach($this->getColorFields() as $field) {
            $this->options[$field . 'Color'] = $color->{'get' . strtoupper($field{0}) . substr($field,1)}();
        }
    }
    /**
     *
     * @param string $label
     * @param array $data
     * @param array $options
     */
    public function __construct($label,array $data,array $options = array()) {
        $this->options = $options;
        $this->options['data'] = $data;
        $this->options['label'] = $label;
    }
}