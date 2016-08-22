<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Legend extends \HugoHeneault\ChartJS\Models\Options {

    /**
     *
     * @var boolean
     */
    protected $display = true;

    /**
     *
     * @var string
     */
    protected $position = 'top';

    /**
     *
     * @var boolean
     */
    protected $fullWidth = true;

    /**
     *
     * @var string[]
     */
    protected static $allowedPositions = array ( 'top', 'bottom' );

    /**
     * @param Labels
     */
    public function setLabels ( Labels $labels ) {
        $this->labels = $labels;
    }

    /**
     *
     * @param boolean $display
     */
    public function setDisplay ( $display ) {
        $this->display = $display;
    }

    /**
     *
     * @param string $position
     */
    public function setPosition ( $position ) {
        if ( in_array ( $position, self::$allowedPositions ) ) {
            $this->position = $position;
        }
    }

    /**
     *
     * @param int $fullWidth
     */
    public function setFullWidth ( $fullWidth ) {
        $this->fullWidth = $fullWidth;
    }

    /**
     *
     * @return string
     */
    public function getPosition () {
        return 'legend';
    }

}
