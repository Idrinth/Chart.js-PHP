<?php

namespace HugoHeneault\ChartJS\Models\Datasets;

class Line extends \HugoHeneault\ChartJS\Models\Dataset {

    /**
     *
     * @return string[]
     */
    protected function getColorFields () {
        return array (
            "background",
            "border",
            "pointBorder",
            "pointBackground",
            "pointHoverBackground",
            "pointHoverBackground"
        );
    }

}
