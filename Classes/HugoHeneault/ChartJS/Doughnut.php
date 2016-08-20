<?php

namespace HugoGeneault\ChartJS;

class Doughnut extends \HugoGeneault\ChartJS\Pie {
    protected $_type = 'Doughnut';
    protected static $_colorsRequired = array('color','highlight');
    protected static $_colorsReplacement = array('color' => 'fill','highlight' => 'stroke');
    // More options soon
}