<?php
function __autoload($class) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'Classes' . DIRECTORY_SEPARATOR . str_replace('\\',DIRECTORY_SEPARATOR,$class) . '.php';
}
ini_set("display_errors",1);
error_reporting(-1);
$values = array(array(65,59,80,81,56,55,40),array(28,48,40,19,86,27,90));
$labels = array("January","February","March","April","May","June","July");
?><!DOCTYPE html>
<html>
    <head>
        <title>Chart.js-PHP</title>
    </head>
    <body>
        <h1>Line</h1>
        <?php
        echo HugoHeneault\ChartJS\SimpleFactory::createLine($values,$labels,250,250);
        ?>

        <h1>Bar</h1>
        <?php
        echo HugoHeneault\ChartJS\SimpleFactory::createBar($values,$labels,250,250);
        ?>

        <h1>Radar</h1>
        <?php
        echo HugoHeneault\ChartJS\SimpleFactory::createRadar($values,$labels,250,250);
        ?>

        <h1>Polar Area</h1>
        <?php
        echo HugoHeneault\ChartJS\SimpleFactory::createPolarArea($values,$labels,250,250);
        ?>

        <h1>Pie & Doughnut</h1>
        <?php
        echo HugoHeneault\ChartJS\SimpleFactory::createDoughnut($values,$labels,250,250);
        echo HugoHeneault\ChartJS\SimpleFactory::createPie($values,$labels,250,250);
        ?>

        <h1>Bubble</h1>
        <?php
        echo HugoHeneault\ChartJS\SimpleFactory::createBubble($values,$labels,250,250)
        ?>
        <script src="Chart.js"></script>
        <script src="chart.js-php.js"></script>
    </body>
</html>
