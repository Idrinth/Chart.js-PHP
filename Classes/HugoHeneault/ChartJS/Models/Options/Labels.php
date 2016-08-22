<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Labels extends \HugoHeneault\ChartJS\Models\Options {

    /**
     * @var int
     */
    protected $boxWidth = 40;

    /**
     *
     * @var boolean
     */
    protected $usePointStyle = true;

    /**
     *
     * @param int $boxWidth
     */
    public function setBoxWidth ( $boxWidth ) {
        $this->boxWidth = intval ( $boxWidth );
    }

    /**
     *
     * @param boolean $usePointStyle
     */
    public function setUsePointStyle ( $usePointStyle ) {
        $this->usePointStyle = ( bool ) $usePointStyle;
    }

    /**
     *
     * @return string
     */
    public function getPosition () {
        return 'legend.labels';
    }

}
