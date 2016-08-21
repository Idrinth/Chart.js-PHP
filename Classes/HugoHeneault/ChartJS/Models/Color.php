<?php

namespace HugoHeneault\ChartJS\Models;

class Color {
    /**
     *
     * @var int
     */
    protected $red = 0;
    /**
     *
     * @var int
     */
    protected $blue = 0;
    /**
     *
     * @var int
     */
    protected $green = 0;
    /**
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     */
    public function __construct($red,$green,$blue) {
        $this->red = $red;
        $this->blue = $blue;
        $this->green = $green;
    }
    /**
     *
     * @param int $modifier
     * @param int $alpha
     * @return string
     */
    protected function getRGBAString($modifier = 0,$alpha = 100) {
        return 'rgb' . ($alpha < 100?'a':'') . '(' .
                $this->getModifiedColor($this->red,$modifier) . ',' .
                $this->getModifiedColor($this->green,$modifier) . ',' .
                $this->getModifiedColor($this->blue,$modifier) .
                ($alpha < 100?',' . ($alpha / 100):'') . ')';
    }
    /**
     *
     * @param int $color
     * @param int $modifier
     * @return int
     */
    protected function getModifiedColor($color,$modifier) {
        return max(min(255,round(pow(1.1,$modifier) * $color)),0);
    }
    /**
     *
     * @return string
     */
    public function getBorder() {
        return $this->getRGBAString();
    }
    /**
     *
     * @return string
     */
    public function getHoverBorder() {
        return $this->getRGBAString(1);
    }
    /**
     *
     * @return string
     */
    public function getBackground() {
        return $this->getRGBAString(1,20);
    }
    /**
     *
     * @return string
     */
    public function getHoverBackground() {
        return $this->getRGBAString(2,20);
    }
    /**
     *
     * @return string
     */
    public function getPointBorder() {
        return $this->getRGBAString(-1,20);
    }
    /**
     *
     * @return string
     */
    public function getPointHoverBorder() {
        return $this->getRGBAString(-2,20);
    }
    /**
     *
     * @return string
     */
    public function getPointBackground() {
        return $this->getRGBAString();
    }
    /**
     *
     * @return string
     */
    public function getPointHoverBackground() {
        return $this->getRGBAString(-1);
    }
}