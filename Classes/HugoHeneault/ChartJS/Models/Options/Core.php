<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Core extends \HugoHeneault\ChartJS\Models\Options {

    /**
     *
     * @var boolean
     */
    protected $responsive = true;

    /**
     *
     * @var int
     */
    protected $responsiveAnimationDuration = 0;

    /**
     *
     * @var boolean
     */
    protected $maintainAspectRatio = true;

    /**
     *
     * @param boolean $responsive
     */
    function setResponsive ( $responsive ) {
        $this->responsive = ( bool ) $responsive;
    }

    /**
     *
     * @param int $responsiveAnimationDuration
     */
    function setResponsiveAnimationDuration ( $responsiveAnimationDuration ) {
        $this->responsiveAnimationDuration = intval ( $responsiveAnimationDuration );
    }

    /**
     *
     * @param boolean $maintainAspectRatio
     */
    function setMaintainAspectRatio ( $maintainAspectRatio ) {
        $this->maintainAspectRatio = ( bool ) $maintainAspectRatio;
    }

    /**
     *
     * @return string
     */
    public function getPosition () {
        return '';
    }

}
