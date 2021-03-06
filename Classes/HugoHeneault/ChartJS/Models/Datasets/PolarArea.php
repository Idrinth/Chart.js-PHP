<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class PolarArea extends \HugoHeneault\ChartJS\Models\Dataset {

    /**
     *
     * @return string[]
     */
    protected function getColorFields () {
        return array (
            "border",
            "background",
            "hoverBackground",
            "hoverBorder"
        );
    }

}
