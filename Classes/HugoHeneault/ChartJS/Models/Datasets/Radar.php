<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class Radar extends \HugoHeneault\ChartJS\Models\Dataset {
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