<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class Bar extends \HugoHeneault\ChartJS\Models\Dataset {

    /**
     *
     * @return string[]
     */
    protected function getColorFields () {
        return array (
            "background",
            "border",
            "hoverBackground",
            "hoverBorder"
        );
    }

}
