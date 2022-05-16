"use strict";

// Class definition
var KTSlidersWidget1 = function() {
    // Private methods
    var initChart = function(query, data) {
        var element = document.querySelector(query);

        if ( !element) {
            return;
        }              
        
        if ( element.classList.contains("initialized") ) {
            return;
        }

        var height = parseInt(KTUtil.css(element, 'height'));
        var baseColor = KTUtil.getCssVariableValue('--bs-' + 'primary');
        var lightColor = KTUtil.getCssVariableValue('--bs-light-' + 'primary' );         

        var options = {
            series: [data],
            chart: {
                fontFamily: 'inherit',
                height: height,
                type: 'radialBar',
                sparkline: {
                    enabled: true,
                }
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        margin: 0,
                        size: "45%"
                    },
                    dataLabels: {
                        showOn: "always",
                        name: {
                            show: false                                 
                        },
                        value: {                                 
                            show: false                              
                        }
                    },
                    track: {
                        background: lightColor,
                        strokeWidth: '100%'
                    }
                }
            },
            colors: [baseColor],
            stroke: {
                lineCap: "round",
            },
            labels: ["Progress"]
        };

        var chart = new ApexCharts(element, options);
        chart.render();
        element.classList.add('initialized');
    }

    // Public methods
    return {
        init: function () {
            // Init default chart
            initChart('#kt_slider_widget_1_chart_1', 76);

            var carousel = document.querySelector('#kt_sliders_widget_1_slider');
            
            if(!carousel){
                return;
            }
            carousel.addEventListener('slid.bs.carousel', function (e) {
                if (e.to === 1) {
                    // Init second chart
                    initChart('#kt_slider_widget_1_chart_2', 55);
                }

                if (e.to === 2) {
                    // Init third chart
                    initChart('#kt_slider_widget_1_chart_3', 25);
                }
            });
        }   
    }        
}();


// Webpack support
if (typeof module !== 'undefined') {
    module.exports = KTSlidersWidget1;
}

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTSlidersWidget1.init();
});
   
        
        
        
           