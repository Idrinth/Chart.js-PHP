var ChartJSPHP = {
    charts: { },
    start: function () {
        if ( document.readyState !== "interactive" && document.readyState !== "complete" ) {
            window.setTimeout ( this.start, 25 );
            return;
        }
        // Getting all chart.js canvas
        var elements = document.querySelectorAll ( "canvas[data-chartjs]" );
        // Looping every canvas
        for (var counter = 0; counter < elements.length; counter++)
        {
            this.charts[elements[counter].id] = new Chart ( elements[counter].getContext ( '2d' ) )[elements[counter].dataset.chartjs] ( JSON.parse ( elements[counter].dataset.data ) );
        }
        delete ChartJSPHP.start;//cleanup
    }
};
ChartJSPHP.start ();