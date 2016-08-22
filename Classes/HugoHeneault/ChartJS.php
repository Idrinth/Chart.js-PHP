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
    public function __construct ( \HugoHeneault\ChartJS\Lists\Dataset $datasets, array $labels, ChartJS\Lists\Options $options = null ) {
        $this->attributes = new ChartJS\Lists\Attribute();
        $this->attributes->add (
                new ChartJS\Models\Attribute (
                "data-chartjs", json_encode (
                        array ( 'type' => $datasets->getType (), 'options' => $options ? $options : new \HugoHeneault\ChartJS\Lists\Options(), 'data' => array ( "datasets" => $datasets, "labels" => $labels ) ), JSON_NUMERIC_CHECK
                )
                )
        );
        $this->attributes->add ( new ChartJS\Models\Attribute ( "id", uniqid ( 'chartjs_', true ) ) );
    }

    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Attribute $attribute
     */
    public function addAttribute ( ChartJS\Models\Attribute $attribute ) {
        $this->attributes->add ( $attribute );
    }

    /**
     *
     * @return string
     */
    public function __toString () {
        return '<div class="hugoheneault-chartjs-wrapper"><canvas' . $this->attributes->__toString () . '></canvas></div>';
    }

}
