<?php

function __autoload ( $class ) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'Classes' . DIRECTORY_SEPARATOR . str_replace ( '\\', DIRECTORY_SEPARATOR, $class ) . '.php';
}

ini_set ( "display_errors", 1 );
error_reporting ( -1 );
$values = array ( '2016' => array ( 65, 59, 80, 81, 56, 55, 40 ), '2015' => array ( 28, 48, 40, 19, 86, 27, 90 ), '2014' => array ( 28, 98, 10, 19, 66, 21, 12 ), '2013' => array ( 21, 11, 66, 32, 19, 7, 1 ) );
$bubbleValues = array ( '2016' => array ( array ( 'x' => 11, 'y' => 23, 'r' => 3 ), array ( 'x' => 19, 'y' => 21, 'r' => 2 ), array ( 'x' => 5, 'y' => 2, 'r' => 7 ), array ( 'x' => 11, 'y' => 1, 'r' => 9 ), array ( 'x' => 31, 'y' => 44, 'r' => 5 ), array ( 'x' => 34, 'y' => 3, 'r' => 3 ), array ( 'x' => 51, 'y' => 32, 'r' => 1 ) ) );
$labels = array ( "January", "February", "March", "April", "May", "June", "July" );
$options = new \HugoHeneault\ChartJS\Lists\Options();
$options->add ( new HugoHeneault\ChartJS\Models\Options\Title () );
$options->modify ( 'title', 'setDisplay', array ( true ) );
?><!DOCTYPE html>
<html>
    <head>
        <title>Chart.js-PHP</title>
    </head>
    <body>
        <h1>Line</h1>
        <?php
        $options->modify ( 'title', 'setText', array ( 'Line' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createLine ( $values, $labels, '250px', '250px', $options );
        ?>

        <h1>Bar</h1>
        <?php
        $options->modify ( 'title', 'setText', array ( 'Bar' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createBar ( $values, $labels, '250px', '250px', $options );
        ?>

        <h1>Radar</h1>
        <?php
        $options->modify ( 'title', 'setText', array ( 'Radar' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createRadar ( $values, $labels, '250px', '250px', $options );
        ?>

        <h1>Polar Area</h1>
        <?php
        $options->modify ( 'title', 'setText', array ( 'Polar Area' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createPolarArea ( $values, $labels, '250px', '250px', $options );
        ?>

        <h1>Pie & Doughnut</h1>
        <?php
        $options->modify ( 'title', 'setText', array ( 'Doughnut' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createDoughnut ( $values, $labels, '250px', '250px', $options );
        $options->modify ( 'title', 'setText', array ( 'Pie' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createPie ( $values, $labels, '250px', '250px', $options );
        ?>

        <h1>Bubble</h1>
        <?php
        $options->modify ( 'title', 'setText', array ( 'Bubble' ) );
        echo HugoHeneault\ChartJS\SimpleFactory::createBubble ( $bubbleValues, array ( '2016' ), '250px', '250px', $options )
        ?>
        <script src="Chart.js"></script>
        <script src="chart.js-php.js"></script>
    </body>
</html>
