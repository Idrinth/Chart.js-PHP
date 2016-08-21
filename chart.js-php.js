var ChartJSPHP = {
    charts: { },
    start: function () {
        if ( document.readyState !== "interactive" && document.readyState !== "complete" ) {
            window.setTimeout ( ChartJSPHP.start, 25 );
            return;
        }
        // Getting all chart.js canvas
        var elements = document.querySelectorAll ( "canvas[data-chartjs]" );
        // Looping every canvas
        for (var counter = 0; counter < elements.length; counter++)
        {
            ChartJSPHP.charts[elements[counter].id] = new Chart ( elements[counter].getContext ( '2d' ), JSON.parse ( elements[counter].dataset.chartjs ) );
        }
        delete ChartJSPHP.start;//cleanup
    }
};
ChartJSPHP.start ();