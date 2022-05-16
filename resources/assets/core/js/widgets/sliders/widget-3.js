"use strict";

// Class definition
var KTSlidersWidget3 = function () {
    // Private methods
    var initChart = function(query, color, data) {
        var element = document.querySelector(query);

        if (!element) {
            return;
        }
        
        if ( element.classList.contains("initialized") ) {
            return;
        }

        var height = parseInt(KTUtil.css(element, 'height'));
        var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--bs-border-dashed-color');
        var baseColor = KTUtil.getCssVariableValue('--bs-' + color);

        var options = {
            series: [{
                name: 'Lessons',
                data: data
            }],            
            chart: {
                fontFamily: 'inherit',
                type: 'area',
                height: height,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {

            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            fill: {
                type: "gradient",
                gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.7,
                stops: [0, 90, 100]
                }
            },
            stroke: {
                curve: 'smooth',
                show: true,
                width: 3,
                colors: [baseColor]
            },
            xaxis: {
                categories: ['', 'Apr 05', 'Apr 06', 'Apr 07', 'Apr 08', 'Apr 09', 'Apr 11', 'Apr 12', 'Apr 14', 'Apr 15', 'Apr 16', 'Apr 17', 'Apr 18', ''],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                tickAmount: 6,
                labels: {
                    rotate: 0,
                    rotateAlways: true,
                    style: {
                        colors: labelColor,
                        fontSize: '12px'
                    }
                },
                crosshairs: {
                    position: 'front',
                    stroke: {
                        color: baseColor,
                        width: 1,
                        dashArray: 3
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: undefined,
                    offsetY: 0,
                    style: {
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                tickAmount: 4,
                max: 24,
                min: 10,
                labels: {
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
                style: {
                    fontSize: '12px'
                } 
            },
            colors: [baseColor],
            grid: {
                borderColor: borderColor,
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            },
            markers: {
                strokeColor: baseColor,
                strokeWidth: 3
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
        element.classList.add('initialized');   
    }

    // Public methods
    return {
        init: function () {
            // Init default chart
            initChart('#kt_sliders_widget_3_chart_1', 'danger', [19, 21, 21, 20, 20, 18, 18, 20, 20, 22, 22, 21, 21, 22]);

            var carousel = document.querySelector('#kt_sliders_widget_3_slider');

            if(!carousel){
                return;
            }
            
            carousel.addEventListener('slid.bs.carousel', function (e) {
                if (e.to === 1) {
                    // Init second chart
                    initChart('#kt_sliders_widget_3_chart_2', 'primary', [18, 22, 22, 20, 20, 18, 18, 20, 20, 18, 18, 20, 20, 22]);
                }                
            });
        }   
    }
}();

// Webpack support
if (typeof module !== 'undefined') {
    module.exports = KTSlidersWidget3;
}

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTSlidersWidget3.init();
});
