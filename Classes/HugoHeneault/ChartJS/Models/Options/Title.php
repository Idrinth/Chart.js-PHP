<?php

namespace HugoHeneault\ChartJS\Models\Options;

class Title extends \HugoHeneault\ChartJS\Models\Options {
    /**
     *
     * @var boolean
     */
    protected $display = false;
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
     * @var string
     */
    protected $text = '';
    /**
     *
     * @var string[]
     */
    protected static $allowedPositions = array('top','bottom');
    /**
     *
     * @param boolean $display
     */
    public function setDisplay($display) {
        $this->display = (bool) $display;
    }
    /**
     *
     * @param string $position
     */
    public function setPosition($position) {
        if(in_array($position,self::$allowedPositions)) {
            $this->position = $position;
        }
    }
    /**
     *
     * @param boolean $fullWidth
     */
    public function setFullWidth($fullWidth) {
        $this->fullWidth = (bool) $fullWidth;
    }
    /**
     *
     * @param string $text
     */
    public function setText($text) {
        $this->text = $text;
    }
    /**
     *
     * @return string
     */
    public function getPosition() {
        return 'title';
    }
}