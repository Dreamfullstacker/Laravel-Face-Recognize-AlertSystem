"use strict";

// Class definition
var KTDocsAdvancedForms = function () {
    // Private functions
    var initShareInput = function () {
        var button = document.querySelector('#kt_share_earn_link_copy_button');
        var input = document.querySelector('#kt_share_earn_link_input');
        var clipboard = new ClipboardJS(button);

        if (!clipboard) {
            return;
        }

        //  Copy text to clipboard. For more info check the plugin's documentation: https://clipboardjs.com/
        clipboard.on('success', function (e) {
            var buttonCaption = button.innerHTML;
            //Add bgcolor
            input.classList.add('bg-success');
            input.classList.add('text-inverse-success');

            button.innerHTML = 'Copied!';

            setTimeout(function () {
                button.innerHTML = buttonCaption;

                // Remove bgcolor
                input.classList.remove('bg-success');
                input.classList.remove('text-inverse-success');
            }, 3000);  // 3seconds

            e.clearSelection();
        });
    }

    const initInteractiveButtons = () => {
        const options = document.querySelectorAll('[data-kt-docs-advanced-forms="interactive"]');
        const inputEl = document.querySelector('[name="interactive_amount"]');
        options.forEach(option => {
            option.addEventListener('click', e => {
                e.preventDefault();

                inputEl.value = e.target.innerText;
            });
        });
    }

    const initInteractiveSlider = () => {
        // Init budget slider
        var budgetSlider = document.querySelector("#kt_docs_forms_advanced_interactive_slider");
        var budgetValue = document.querySelector("#kt_docs_forms_advanced_interactive_slider_label");

        noUiSlider.create(budgetSlider, {
            start: [5],
            connect: true,
            range: {
                "min": 1,
                "max": 500
            }
        });

        budgetSlider.noUiSlider.on("update", function (values, handle) {
            budgetValue.innerHTML = Math.round(values[handle]);
            if (handle) {
                budgetValue.innerHTML = Math.round(values[handle]);
            }
        });
    }

    // Public methods
    return {
        init: function () {
            initShareInput();
            initInteractiveButtons();
            initInteractiveSlider();
        }
    }
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDocsAdvancedForms.init();
});
