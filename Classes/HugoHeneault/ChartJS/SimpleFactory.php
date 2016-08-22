<?php

namespace HugoHeneault\ChartJS;

class SimpleFactory {
    /**
     *
     * @param string $class
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    private static function create($class,array $datasets,$labels,Lists\Options $options,$width = '',$height = '') {
        $data = new \HugoHeneault\ChartJS\Lists\Dataset();
        $count = 0;
        foreach($datasets as $label => $dataset) {
            $data->add(new $class(is_int($label) && $label === $count?'Set ' . ($label + 1):$label,$dataset));
            $count++;
        }
        $chart = new \HugoHeneault\ChartJS($data,$labels,$options);
        if($width) {
            $chart->addAttribute(new \HugoHeneault\ChartJS\Models\Attribute("width",$width));
        }
        if($height) {
            $chart->addAttribute(new \HugoHeneault\ChartJS\Models\Attribute("height",$height));
        }
        return $chart;
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createBar(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Bar",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createBubble(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Bubble",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createDoughnut(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Doughnut",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createLine(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Line",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createPie(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Pie",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createPolarArea(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\PolarArea",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
    /**
     *
     * @param array $datasets
     * @param string[] $labels
     * @param string $width
     * @param string $height
     * @return \HugoHeneault\ChartJS
     */
    public static function createRadar(array $datasets,$labels,$width = '',$height = '',$options = null) {
        return self::create("\HugoHeneault\ChartJS\Models\Datasets\Radar",$datasets,$labels,$options?$options:new Lists\Options(),$width,$height);
    }
}