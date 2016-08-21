<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class Radar extends \HugoHeneault\ChartJS\Models\Dataset {
    /**
     *
     * @return string[]
     */
    protected function getColorFields() {
        return array(
            "border",
            "background",
            "pointBorder",
            "pointBackground",
            "pointHoverBackground",
            "pointHoverBorder"
        );
    }
}