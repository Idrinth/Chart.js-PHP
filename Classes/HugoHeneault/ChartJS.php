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
        $this->attributes->offsetSet(
                "data-chartjs",new ChartJS\Models\Attribute(
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
        $this->attributes->offsetSet($attribute->getName(),$attribute);
    }
    /**
     *
     * @return string
     */
    public function __toString() {
        return '<canvas id="' . uniqid('chartjs_',true) . '"' . $this->attributes->__toString() . '></canvas>';
    }
}