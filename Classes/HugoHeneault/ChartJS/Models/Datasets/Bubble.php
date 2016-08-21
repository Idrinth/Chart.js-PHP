<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class Bubble extends \HugoHeneault\ChartJS\Models\Dataset {
    protected function getColorFields() {
        return array(
            "border",
            "background",
            "hoverBackground",
            "hoverBorder"
        );
    }
}