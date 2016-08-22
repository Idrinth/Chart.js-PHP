<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Tooltips extends \HugoHeneault\ChartJS\Models\Options {

    /**
     *
     * @var boolean
     */
    protected $enabled = true;

    /**
     *
     * @var string
     */
    protected $mode = 'single';

    /**
     *
     * @var string[]
     */
    protected static $allowedModes = array ( 'single', 'label', 'x-axis', 'dataset' );

    /**
     *
     * @param boolean $enabled
     */
    function setEnabled ( $enabled ) {
        $this->enabled = ( bool ) $enabled;
    }

    /**
     *
     * @param string $mode
     */
    public function setMode ( $mode ) {
        if ( in_array ( $mode, self::$allowedModes ) ) {
            $this->mode = $mode;
        }
    }

    /**
     *
     * @return string
     */
    public function getPosition () {
        return 'tooltips';
    }

}
