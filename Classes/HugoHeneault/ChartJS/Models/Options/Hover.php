<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Hover extends \HugoHeneault\ChartJS\Models\Options {
    /**
     *
     * @var string
     */
    protected $mode = 'single';
    /**
     *
     * @var int
     */
    protected $animationDuration = 400;
    /**
     *
     * @var string[]
     */
    protected static $allowedModes = array('single','label','x-axis','dataset');
    /**
     *
     * @param string $mode
     */
    public function setMode($mode) {
        if(in_array($mode,self::$allowedModes)) {
            $this->mode = $mode;
        }
    }
    /**
     *
     * @param int $animationDuration
     */
    public function setAnimationDuration($animationDuration) {
        $this->animationDuration = intval($animationDuration);
    }
    /**
     *
     * @return string
     */
    public function getPosition() {
        return 'hover';
    }
}