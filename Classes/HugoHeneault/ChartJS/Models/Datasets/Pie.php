<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class Pie extends \HugoHeneault\ChartJS\Models\Dataset {
    protected function getColorFields() {
        return array(
            "background",
            "border",
            "hoverBackground",
            "hoverBorder"
        );
    }
}