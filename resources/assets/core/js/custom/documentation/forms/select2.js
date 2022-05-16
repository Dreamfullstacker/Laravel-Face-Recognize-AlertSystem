"use strict";

// Class definition
var KTFormsSelect2Demo = function () {
    // Private functions
    var exampleCountry = function () {
        // Format options
        var optionFormat = function(item) {
            if ( !item.id ) {
                return item.text;
            }

            var span = document.createElement('span');
            var imgUrl = item.element.getAttribute('data-kt-select2-country');
            var template = '';

            template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
            template += item.text;

            span.innerHTML = template;

            return $(span);
        }

        // Init Select2 --- more info: https://select2.org/
        $('#kt_docs_select2_country').select2({
            templateSelection: optionFormat,
            templateResult: optionFormat
        });
    }

    const exampleUsers = function () {
        // Format options
        var optionFormat = function(item) {
            if ( !item.id ) {
                return item.text;
            }

            var span = document.createElement('span');
            var imgUrl = item.element.getAttribute('data-kt-select2-user');
            var template = '';

            template += '<img src="' + imgUrl + '" class="rounded-circle h-20px me-2" alt="image"/>';
            template += item.text;

            span.innerHTML = template;

            return $(span);
        }

        // Init Select2 --- more info: https://select2.org/
        $('#kt_docs_select2_users').select2({
            templateSelection: optionFormat,
            templateResult: optionFormat
        });
    }

    var exampleFloatingLabels1 = function() {
        var optionFormat = function(item) {
            if ( !item.id ) {
                return item.text;
            }

            var span = document.createElement('span');
            var template = '';

            template += '<img src="' + item.element.getAttribute('data-kt-select2-image') + '" class="rounded-circle h-20px me-2" alt="image"/>';
            template += item.text;

            span.innerHTML = template;

            return $(span);
        }

        // Init Select2 --- more info: https://select2.org/
        $('#kt_docs_select2_floating_labels_1').select2({
            placeholder: "Select coin",
            minimumResultsForSearch: Infinity,
            templateSelection: optionFormat,
            templateResult: optionFormat
        });
    }

    var exampleFloatingLabels2 = function() {
        var optionFormat = function(item) {
            if ( !item.id ) {
                return item.text;
            }

            var span = document.createElement('span');
            var template = '';

            template += '<img src="' + item.element.getAttribute('data-kt-select2-image') + '" class="rounded-circle h-20px me-2" alt="image"/>';
            template += item.text;

            span.innerHTML = template;

            return $(span);
        }

        // Init Select2 --- more info: https://select2.org/
        $('#kt_docs_select2_floating_labels_2').select2({
            placeholder: "Select coin",
            minimumResultsForSearch: Infinity,
            templateSelection: optionFormat,
            templateResult: optionFormat
        });
    }

    const exampleRichContent = () => {
        // Format options
        const optionFormat = (item) => {
            if (!item.id) {
                return item.text;
            }

            var span = document.createElement('span');
            var template = '';

            template += '<div class="d-flex align-items-center">';
            template += '<img src="' + item.element.getAttribute('data-kt-rich-content-icon') + '" class="rounded-circle h-40px me-3" alt="' + item.text + '"/>';
            template += '<div class="d-flex flex-column">'
            template += '<span class="fs-4 fw-bolder lh-1">' + item.text + '</span>';
            template += '<span class="text-muted fs-7">' + item.element.getAttribute('data-kt-rich-content-subcontent') + '</span>';
            template += '</div>';
            template += '</div>';

            span.innerHTML = template;

            return $(span);
        }

        // Init Select2 --- more info: https://select2.org/
        $('#kt_docs_select2_rich_content').select2({
            placeholder: "Select an option",
            minimumResultsForSearch: Infinity,
            templateSelection: optionFormat,
            templateResult: optionFormat
        });
    }

    return {
        // Public Functions
        init: function () {
            exampleCountry();
            exampleUsers();
            exampleFloatingLabels1();
            exampleFloatingLabels2();
            exampleRichContent();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTFormsSelect2Demo.init();
});
