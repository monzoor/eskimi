(function($){
    $('#impressions').highcharts({
        title: {
            text: null
        },
        xAxis: [{
            style: {
                color: '#888888'
            },
            categories: ["2017-11-04","2017-11-05","2017-11-06","2017-11-07","2017-11-08","2017-11-09","2017-11-10"]
        }],
        yAxis: [
            { // Primary yAxis
                min: 0,
                title: {
                    text: 'Impressions',
                    style: {
                        color: '#888888'
                    }
                },
                labels: {
                    style: {
                        color: '#888888'
                    }
                }
            },
        ],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 50,
            verticalAlign: 'top',
            y: 10,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [
            {
                name: 'Impressions',
                type: 'spline',
                yAxis: 0,
                color: '#4387bf',
                data: [0,0,0,1240233,1302809,1330435,1290663]
            }
        ]
    });

    $('#clicks').highcharts({
        title: {
            text: null
        },
        xAxis: [{
            style: {
                color: '#888888'
            },
            categories: ["2017-11-04","2017-11-05","2017-11-06","2017-11-07","2017-11-08","2017-11-09","2017-11-10"]
        }],
        yAxis: [
            { // Secondary yAxis
                min: 0,
                title: {
                    text: 'Clicks',
                    style: {
                        color: '#888888'
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: '#888888'
                    }
                },
            },
        ],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 50,
            verticalAlign: 'top',
            y: 10,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [
            {
                name: 'Clicks',
                type: 'spline',
                yAxis: 0,
                color: 'rgba(95, 175, 228, 0.8)',
                data: [0,0,0,19013,23395,21574,27976]
            },
        ]
    });

    $('#conversions').highcharts({
        title: {
            text: null
        },
        xAxis: [{
            style: {
                color: '#888888'
            },
            categories: ["2017-11-04","2017-11-05","2017-11-06","2017-11-07","2017-11-08","2017-11-09","2017-11-10"]
        }],
        yAxis: [
            {
                //graphConversions
                min: 0,
                title: {
                    text: 'Conversions',
                    style: {
                        color: '#888888'
                    }
                },
                labels: {
                    format: '{value}',
                    style: {
                        color: '#888888'
                    }
                },
                opposite: true
            }
        ],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 50,
            verticalAlign: 'top',
            y: 10,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [
            {
                name: 'Conversions',
                type: 'spline',
                yAxis: 0,
                color: 'rgba(160, 212, 144, 0.8)',
                data: [0,0,0,2185,2532,2034,2889]
            }
        ]
    });

})((window.jQuery));
