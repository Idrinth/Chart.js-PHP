<?php

namespace HugoHeneault\ChartJS;

class SimpleFactory {
    private static function create($class,array $datasets,$labels,$width = '',$height = '') {
        $data = new \HugoHeneault\ChartJS\Lists\Dataset();
        foreach($datasets as $pos => $dataset) {
            $data->add(new $class($labels[$pos],$dataset));
        }
        $chart = new \HugoHeneault\ChartJS($data,$labels);
        if($width) {
            $chart->addAttribute(new \HugoHeneault\ChartJS\Models\Attribute("width",$width));
        }
        if($height) {
            $chart->addAttribute(new \HugoHeneault\ChartJS\Models\Attribute("height",$height));
        }
        return $chart;
    }
    public static function createBar(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Bar",$datasets,$labels,$width,$height);
    }
    public static function createBubble(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Bubble",$datasets,$labels,$width,$height);
    }
    public static function createDoughnut(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Doughnut",$datasets,$labels,$width,$height);
    }
    public static function createLine(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Line",$datasets,$labels,$width,$height);
    }
    public static function createPie(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Pie",$datasets,$labels,$width,$height);
    }
    public static function createPolarArea(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\PolarArea",$datasets,$labels,$width,$height);
    }
    public static function createRadar(array $datasets,$labels,$width = '',$height = '') {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Radar",$datasets,$labels,$width,$height);
    }
}