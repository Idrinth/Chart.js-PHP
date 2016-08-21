<?php

namespace HugoHeneault;

class ChartJS {
    /**
     * @var ChartJS\Lists\Attribute Canvas attributes (class,
     */
    protected $attributes;
    /**
     *
     * @param \HugoHeneault\ChartJS\Lists\Dataset $datasets
     * @param string[] $labels
     * @param array $options
     */
    public function __construct(\HugoHeneault\ChartJS\Lists\Dataset $datasets,array $labels,$options = null) {
        $this->attributes = new ChartJS\Lists\Attribute();
        $this->attributes->add(
                new ChartJS\Models\Attribute(
                "data-chartjs",json_encode(
                        array('type' => $datasets->getType(),'options' => $options?$options:new \stdClass(),'data' => array("datasets" => $datasets,"labels" => $labels)),JSON_NUMERIC_CHECK
                )
                )
        );
    }
    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Attribute $attribute
     */
    public function addAttribute(ChartJS\Models\Attribute $attribute) {
        $this->attributes->add($attribute);
    }
    /**
     *
     * @return string
     */
    public function __toString() {
        return '<div class="hugoheneault-chartjs-wrapper" style="width:' . ($this->attributes->offsetExists('width')?$this->attributes->offsetGet('width')->getValue():'100%') . ';height:' . ($this->attributes->offsetExists('height')?$this->attributes->offsetGet('height')->getValue():'auto') . ';overflow:hidden;"><canvas id="' . uniqid('chartjs_',true) . '"' . $this->attributes->__toString() . '></canvas></div>';
    }
}