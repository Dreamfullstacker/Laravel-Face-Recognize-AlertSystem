"use strict";

// Class definition
var KTTablesWidget14 = function () {
    // Private methods
    var initChart = function(chartSelector, data) {
        var element = document.querySelector(chartSelector);

        if (!element) {
            return;
        }
        
        var height = parseInt(KTUtil.css(element, 'height'));
        var color = element.getAttribute('data-kt-chart-color');

        var labelColor = KTUtil.getCssVariableValue('--bs-' + 'gray-800');
        var strokeColor = KTUtil.getCssVariableValue('--bs-' + 'gray-300');
        var baseColor = KTUtil.getCssVariableValue('--bs-' + color);
        var lightColor = KTUtil.getCssVariableValue('--bs-white');

        var options = {
            series: [{
                name: 'Net Profit',
                data: data
            }],
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                },
                sparkline: {
                    enabled: true
                }
            },
            plotOptions: {},
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: 'solid',
                opacity: 1
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 2,
                colors: [baseColor]
            },
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    show: false,
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    show: false,
                    position: 'front',
                    stroke: {
                        color: strokeColor,
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: false
                }
            },
            yaxis: {
                min: 0,
                max: 60,
                labels: {
                    show: false,
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                }
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                enabled: false
            },
            colors: [lightColor],
            markers: {
                colors: [lightColor],
                strokeColor: [baseColor],
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);

        // Set timeout to properly get the parent elements width
        setTimeout(function() {
            chart.render();   
        }, 200);           
    }

    // Public methods
    return {
        init: function () {           
            initChart('#kt_table_widget_14_chart_1', 
                [7, 10, 5, 21, 6, 11, 5, 23, 5, 11, 18, 7, 21,13]            
            );   
            
            initChart('#kt_table_widget_14_chart_2', 
                [17, 5, 23, 2, 21, 9, 17, 23, 4, 24, 9, 17, 21,7]           
            ); 

            initChart('#kt_table_widget_14_chart_3', 
                [2, 24, 5, 17, 7, 2, 12, 24, 5, 24, 2, 8, 12,7]           
            ); 

            initChart('#kt_table_widget_14_chart_4', 
                [24, 3, 5, 19, 3, 7, 25, 14, 5, 14, 2, 8, 5,17]           
            ); 

            initChart('#kt_table_widget_14_chart_5', 
                [3, 23, 1, 19, 3, 17, 3, 9, 25, 4, 2, 18, 25,3]           
            );
        }   
    }
}();

// Webpack support
if (typeof module !== 'undefined') {
    module.exports = KTTablesWidget14;
}

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTTablesWidget14.init();
});


 