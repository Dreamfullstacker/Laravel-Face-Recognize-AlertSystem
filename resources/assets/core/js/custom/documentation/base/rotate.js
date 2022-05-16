"use strict";

// Class definition
var KTBaseRotateDemos = function() {
    // Private functions
    var example3 = function(element) {
        // Element to indecate
        var button = document.querySelector("#kt_button_toggle");

        // Handle button click event
        button.addEventListener("click", function() {
            button.classList.toggle("active");              
        });
    }
    

    return {
        // Public Functions
        init: function(element) {
            example3();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTBaseRotateDemos.init();
});