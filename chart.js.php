<?php
function __autoload($class) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'Classes' . DIRECTORY_SEPARATOR . str_replace('\\',DIRECTORY_SEPARATOR,$class) . '.php';
}
$array_values = array(array(65,59,80,81,56,55,40),array(28,48,40,19,86,27,90));
$array_labels = array("January","February","March","April","May","June","July");

$Line = new HugoGeneault\ChartJS\Line('example_line',500,500);
$Line->addLine($array_values[0]);
$Line->addLine($array_values[1]);
$Line->addLabels($array_labels);

$Bar = new HugoGeneault\ChartJS\Bar('example_bar',500,500);
$Bar->addBars($array_values[0]);
$Bar->addBars($array_values[1]);
$Bar->addLabels($array_labels);

$Radar = new HugoGeneault\ChartJS\Radar('example_radar',500,500);
$Radar->addRadar($array_values[0]);
$Radar->addRadar($array_values[1]);
$Radar->addLabels($array_labels);

$PolarArea = new HugoGeneault\ChartJS\PolarArea('example_polararea',500,500);
$PolarArea->addSegment(65);
$PolarArea->addSegment(59);
$PolarArea->addSegment(80);
$PolarArea->addSegment(81);
$PolarArea->addSegment(56);
$PolarArea->addSegment(55);
$PolarArea->addSegment(40);
$PolarArea->addLabels($array_labels);

$Pie = new HugoGeneault\ChartJS\Pie('example_pie',500,500);
$Pie->addPart(65);
$Pie->addPart(59);
$Pie->addPart(80);
$Pie->addPart(81);
$Pie->addLabels($array_labels);

$Doughnut = new HugoGeneault\ChartJS\Doughnut('example_doughnut',500,500);
$Doughnut->addPart(65);
$Doughnut->addPart(59);
$Doughnut->addPart(80);
$Doughnut->addPart(81);
$Doughnut->addLabels($array_labels);
?><!DOCTYPE html>
<html>
    <head>
        <title>Chart.js-PHP</title>
    </head>
    <body>
        <h1>Line</h1>
        <?php
        echo $Line;
        ?>

        <h1>Bar</h1>
        <?php
        echo $Bar
        ?>

        <h1>Radar</h1>
        <?php
        echo $Radar
        ?>

        <h1>Polar Area</h1>
        <?php
        echo $PolarArea
        ?>

        <h1>Pie & Doughnut</h1>
        <?php
        echo $Pie . $Doughnut
        ?>
        <script src="Chart.js"></script>
        <script src="chart.js-php.js"></script>
        <script>
            ( function () {
                loadChartJsPhp ();
            } ) ();
        </script>
    </body>
</html>
