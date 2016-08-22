<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Animation extends \HugoHeneault\ChartJS\Models\Options {

    /**
     *
     * @var it
     */
    protected $duration = 1000;

    /**
     *
     * @var string
     */
    protected $easing = "easeOutQuart";

    /**
     *
     * @var string[]
     */
    protected static $allowedEasing = array (
        'linear',
        'easeInSine', 'easeOutSine', 'easeInOutSine',
        'easeInQuad', 'easeOutQuad', 'easeInOutQuad',
        'easeInCubic', 'easeOutCubic', 'easeInOutCubic',
        'easeInQuart', 'easeOutQuart', 'easeInOutQuart',
        'easeInQuint', 'easeOutQuint', 'easeInOutQuint',
        'easeInExpo', 'easeOutExpo', 'easeInOutExpo',
        'easeInCirc', 'easeOutCirc', 'easeInOutCirc',
        'easeInBack', 'easeOutBack', 'easeInOutBack',
        'easeInElastic', 'easeOutElastic', 'easeInOutElastic',
        'easeInBounce', 'easeOutBounce', 'easeInOutBounce'
    );

    /**
     *
     * @param int $duration
     */
    public function setDuration ( $duration ) {
        $this->duration = intval ( $duration );
    }

    /**
     *
     * @param string $easing
     */
    public function setEasing ( $easing ) {
        if ( in_array ( $easing, self::$allowedEasing ) ) {
            $this->easing = $easing;
        }
    }

    /**
     * @return string
     */
    public function getPosition () {
        return 'easing';
    }

}
