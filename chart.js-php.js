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
        for ( var counter = 0;
                counter < elements.length;
                counter++ )
        {
            try {
                var style = "overflow:hidden;";
                var defaults = {
                    height: 'auto',
                    width: '100%'
                };
                for ( var key in defaults ) {
                    var val = elements[counter].getAttribute ( key );
                    style += key + ":" + ( val ? val : defaults[key] ) + ";";
                }
                //setting configured boundaries
                elements[counter].parentNode.setAttribute ( "style", style );
                ChartJSPHP.charts[elements[counter].id] = new Chart ( elements[counter].getContext ( '2d' ), JSON.parse ( elements[counter].dataset.chartjs ) );
            } catch ( e ) {
                console.log ( e );
            }
        }
        delete ChartJSPHP.start;//cleanup
    }
};
ChartJSPHP.start ();