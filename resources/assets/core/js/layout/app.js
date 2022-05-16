"use strict";

// Class definition
var KTApp = function () {
    var select2FocusFixInitialized = false;

    var initPageLoader = function () {
        // CSS3 Transitions only after page load(.page-loading class added to body tag and remove with JS on page load)
        KTUtil.removeClass(document.body, 'page-loading');
    }

    var initBootstrapTooltip = function (el, options) {
        var delay = {};

        // Handle delay options
        if (el.hasAttribute('data-bs-delay-hide')) {
            delay['hide'] = el.getAttribute('data-bs-delay-hide');
        }

        if (el.hasAttribute('data-bs-delay-show')) {
            delay['show'] = el.getAttribute('data-bs-delay-show');
        }

        if (delay) {
            options['delay'] = delay;
        }

        // Check dismiss options
        if (el.hasAttribute('data-bs-dismiss') && el.getAttribute('data-bs-dismiss') == 'click') {
            options['dismiss'] = 'click';
        }

        // Initialize popover
        var tp = new bootstrap.Tooltip(el, options);

        // Handle dismiss
        if (options['dismiss'] && options['dismiss'] === 'click') {
            // Hide popover on element click
            el.addEventListener("click", function (e) {
                tp.hide();
            });
        }

        return tp;
    }

    var initBootstrapTooltips = function (el, options) {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));

        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            initBootstrapTooltip(tooltipTriggerEl, {});
        });
    }

    var initBootstrapPopover = function (el, options) {
        var delay = {};

        // Handle delay options
        if (el.hasAttribute('data-bs-delay-hide')) {
            delay['hide'] = el.getAttribute('data-bs-delay-hide');
        }

        if (el.hasAttribute('data-bs-delay-show')) {
            delay['show'] = el.getAttribute('data-bs-delay-show');
        }

        if (delay) {
            options['delay'] = delay;
        }

        // Handle dismiss option
        if (el.getAttribute('data-bs-dismiss') == 'true') {
            options['dismiss'] = true;
        }

        if (options['dismiss'] === true) {
            options['template'] = '<div class="popover" role="tooltip"><div class="popover-arrow"></div><span class="popover-dismiss btn btn-icon"></span><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }

        // Initialize popover
        var popover = new bootstrap.Popover(el, options);

        // Handle dismiss click
        if (options['dismiss'] === true) {
            var dismissHandler = function (e) {
                popover.hide();
            }

            el.addEventListener('shown.bs.popover', function () {
                var dismissEl = document.getElementById(el.getAttribute('aria-describedby'));
                dismissEl.addEventListener('click', dismissHandler);
            });

            el.addEventListener('hide.bs.popover', function () {
                var dismissEl = document.getElementById(el.getAttribute('aria-describedby'));
                dismissEl.removeEventListener('click', dismissHandler);
            });
        }

        return popover;
    }

    var initBootstrapPopovers = function () {
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));

        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            initBootstrapPopover(popoverTriggerEl, {});
        });
    }

    var initBootstrapScrollSpy = function () {
        var elements = [].slice.call(document.querySelectorAll('[data-bs-spy="scroll"]'));

        elements.map(function (element) {
            var sel = element.getAttribute('data-bs-target');
            var scrollContent = document.querySelector(element.getAttribute('data-bs-target'));
            var scrollSpy = bootstrap.ScrollSpy.getInstance(scrollContent);
            if (scrollSpy) {
                scrollSpy.refresh();
            }
        });
    }

    var initBootstrapToast = function () {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'));
        var toastList = toastElList.map(function (toastEl) {
            return new bootstrap.Toast(toastEl, {})
        });
    }

    var initBootstrapCollapse = function() {
        KTUtil.on(document.body,  '.collapsible[data-bs-toggle="collapse"]', 'click', function(e) {
            if (this.classList.contains('collapsed')) {
                this.classList.remove('active');
                this.blur();
            } else {
                this.classList.add('active');
            }

            if (this.hasAttribute('data-kt-toggle-text')) {
                var text = this.getAttribute('data-kt-toggle-text');
                var target = this.querySelector('[data-kt-toggle-text-target="true"]');
                var target = target ? target : this;

                this.setAttribute('data-kt-toggle-text', target.innerText);
                target.innerText = text;
            }
        });
    }

    var initBootstrapRotate = function() {
        KTUtil.on(document.body,  '[data-kt-rotate="true"]', 'click', function(e) {
            if (this.classList.contains('active')) {
                this.classList.remove('active');
                this.blur();
            } else {
                this.classList.add('active');
            }
        });
    }

    var initButtons = function () {
        var buttonsGroup = [].slice.call(document.querySelectorAll('[data-kt-buttons="true"]'));

        buttonsGroup.map(function (group) {
            var selector = group.hasAttribute('data-kt-buttons-target') ? group.getAttribute('data-kt-buttons-target') : '.btn';

            // Toggle Handler
            KTUtil.on(group, selector, 'click', function (e) {
                var buttons = [].slice.call(group.querySelectorAll(selector + '.active'));

                buttons.map(function (button) {
                    button.classList.remove('active');
                });

                this.classList.add('active');
            });
        });
    }

    var initDaterangepicker = function() {
        // Check if jQuery included
        if (typeof jQuery == 'undefined') {
            return;
        }

        // Check if daterangepicker included
        if (typeof $.fn.daterangepicker === 'undefined') {
            return;
        }

        var elements = [].slice.call(document.querySelectorAll('[data-kt-daterangepicker="true"]'));
        var start = moment().subtract(29, 'days');
        var end = moment();
        
        elements.map(function (element) {
            var display = element.querySelector('div');
            var attrOpens  = element.hasAttribute('data-kt-daterangepicker-opens') ? element.getAttribute('data-kt-daterangepicker-opens') : 'left';

            var cb = function(start, end) {
                if (display) {
                    display.innerHTML = start.format('D MMM YYYY') + ' - ' + end.format('D MMM YYYY');
                }
            }

            $(element).daterangepicker({
                startDate: start,
                endDate: end,
                opens: attrOpens,
                ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
        });
    }

    var initCheck = function () {
        // Toggle Handler
        KTUtil.on(document.body, '[data-kt-check="true"]', 'change', function (e) {
            var check = this;
            var targets = document.querySelectorAll(check.getAttribute('data-kt-check-target'));

            KTUtil.each(targets, function (target) {
                if (target.type == 'checkbox') {
                    target.checked = check.checked;
                } else {
                    target.classList.toggle('active');
                }
            });
        });
    }

    var initSelect2 = function () {
        // Check if jQuery included
        if (typeof jQuery == 'undefined') {
            return;
        }

        // Check if select2 included
        if (typeof $.fn.select2 === 'undefined') {
            return;
        }

        var elements = [].slice.call(document.querySelectorAll('[data-control="select2"], [data-kt-select2="true"]'));

        elements.map(function (element) {
            var options = {
                dir: document.body.getAttribute('direction')
            };

            if (element.getAttribute('data-hide-search') == 'true') {
                options.minimumResultsForSearch = Infinity;
            }

            $(element).select2(options);
        });

        /*
        * Hacky fix for a bug in select2 with jQuery 3.6.0's new nested-focus "protection"
        * see: https://github.com/select2/select2/issues/5993
        * see: https://github.com/jquery/jquery/issues/4382
        *
        * TODO: Recheck with the select2 GH issue and remove once this is fixed on their side
        */

        if (select2FocusFixInitialized === false) {
            select2FocusFixInitialized = true;
            
            $(document).on('select2:open', function(e) {
                var elements = document.querySelectorAll('.select2-container--open .select2-search__field');
                if (elements.length > 0) {
                    elements[elements.length - 1].focus();
                }                
            });
        }        
    }
    
    var initModal = function() {
        // Apply fix for Firefox's known bug with Flatpickr and other inputs focus state
        if (navigator.userAgent.toLowerCase().indexOf('firefox') !== -1) {
            const allModals = document.querySelectorAll('.modal:not(.initialized)');

            allModals.forEach(modal => {
                modal.addEventListener('shown.bs.modal', function() {
                    bootstrap.Modal.getInstance(this).handleUpdate();
                    this.classList.add('initialized');
                    alert(2);
                });
            });
        }
    }

    var initAutosize = function () {
        var inputs = [].slice.call(document.querySelectorAll('[data-kt-autosize="true"]'));

        inputs.map(function (input) {
            autosize(input);
        });
    }

    var initCountUp = function () {
        var elements = [].slice.call(document.querySelectorAll('[data-kt-countup="true"]:not(.counted)'));

        elements.map(function (element) {
            if (KTUtil.isInViewport(element) && KTUtil.visible(element)) {
                var options = {};

                var value = element.getAttribute('data-kt-countup-value');
                value = parseFloat(value.replace(/,/g, ""));

                if (element.hasAttribute('data-kt-countup-start-val')) {
                    options.startVal = parseFloat(element.getAttribute('data-kt-countup-start-val'));
                }

                if (element.hasAttribute('data-kt-countup-duration')) {
                    options.duration = parseInt(element.getAttribute('data-kt-countup-duration'));
                }

                if (element.hasAttribute('data-kt-countup-decimal-places')) {
                    options.decimalPlaces = parseInt(element.getAttribute('data-kt-countup-decimal-places'));
                }

                if (element.hasAttribute('data-kt-countup-prefix')) {
                    options.prefix = element.getAttribute('data-kt-countup-prefix');
                }

                if (element.hasAttribute('data-kt-countup-separator')) {
                    options.separator = element.getAttribute('data-kt-countup-separator');
                }

                if (element.hasAttribute('data-kt-countup-suffix')) {
                    options.suffix = element.getAttribute('data-kt-countup-suffix');
                }

                var count = new countUp.CountUp(element, value, options);

                count.start();

                element.classList.add('counted');
            }
        });
    }

    var initCountUpTabs = function () {
        // Initial call
        initCountUp();

        // Window scroll event handler
        window.addEventListener('scroll', initCountUp);

        // Tabs shown event handler
        var tabs = [].slice.call(document.querySelectorAll('[data-kt-countup-tabs="true"][data-bs-toggle="tab"]'));
        tabs.map(function (tab) {
            tab.addEventListener('shown.bs.tab', initCountUp);
        });
    }

    var initTinySliders = function () {
        // Init Slider
        var initSlider = function (el) {
            if (!el) {
                return;
            }

            const tnsOptions = {};

            // Convert string boolean
            const checkBool = function (val) {
                if (val === 'true') {
                    return true;
                }
                if (val === 'false') {
                    return false;
                }
                return val;
            };

            // get extra options via data attributes
            el.getAttributeNames().forEach(function (attrName) {
                // more options; https://github.com/ganlanyuan/tiny-slider#options
                if ((/^data-tns-.*/g).test(attrName)) {
                    let optionName = attrName.replace('data-tns-', '').toLowerCase().replace(/(?:[\s-])\w/g, function (match) {
                        return match.replace('-', '').toUpperCase();
                    });

                    if (attrName === 'data-tns-responsive') {
                        // fix string with a valid json
                        const jsonStr = el.getAttribute(attrName).replace(/(\w+:)|(\w+ :)/g, function (matched) {
                            return '"' + matched.substring(0, matched.length - 1) + '":';
                        });
                        try {
                            // convert json string to object
                            tnsOptions[optionName] = JSON.parse(jsonStr);
                        }
                        catch (e) {
                        }
                    }
                    else {
                        tnsOptions[optionName] = checkBool(el.getAttribute(attrName));
                    }
                }
            });

            const opt = Object.assign({}, {
                container: el,
                slideBy: 'page',
                autoplay: true,
                autoplayButtonOutput: false,
            }, tnsOptions);

            if (el.closest('.tns')) {
                KTUtil.addClass(el.closest('.tns'), 'tns-initiazlied');
            }

            return tns(opt);
        }

        // Sliders
        const elements = Array.prototype.slice.call(document.querySelectorAll('[data-tns="true"]'), 0);

        if (!elements && elements.length === 0) {
            return;
        }

        elements.forEach(function (el) {
            initSlider(el);
        });
    }

    var initSmoothScroll = function () {
        if (SmoothScroll) {

            new SmoothScroll('a[data-kt-scroll-toggle][href*="#"]', {
                speed: 1000,
                speedAsDuration: true,
                offset: function (anchor, toggle) {
                    // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
                    // This example is a function, but you could do something as simple as `offset: 25`

                    // An example returning different values based on whether the clicked link was in the header nav or not
                    if (anchor.hasAttribute('data-kt-scroll-offset')) {
                        var val = KTUtil.getResponsiveValue(anchor.getAttribute('data-kt-scroll-offset'));
                        
                        return val;
                    } else {
                        return 0;
                    }
                }
            });
        }
    }

    var setThemeMode = function(mode, cb) {
        // Load css file
        var loadCssFile = function(fileName, newFileName) {
            return new Promise(function(resolve, reject) {
                var oldLink = document.querySelector("link[href*='" + fileName + "']");
                var link = document.createElement('link');
                var href = oldLink.href.replace(fileName, newFileName);
                
                link.rel = 'stylesheet';
                link.type = 'text/css';
                link.href = href;

                document.head.insertBefore(link, oldLink);               

                // Important success and error for the promise
                link.onload = function() {
                    resolve(href);
                    oldLink.remove();
                };

                link.onerror = function() {
                    reject(href);
                };
            });
        };

        // Set page loading state
        document.body.classList.add('page-loading');

        if ( mode === 'dark' ) {
            Promise.all([
                loadCssFile('plugins.bundle.css', 'plugins.dark.bundle.css'),
                loadCssFile('style.bundle.css', 'style.dark.bundle.css')
            ]).then(function() {
                // Set dark mode class
                document.body.classList.add("dark-mode");

                // Remove page loading srate
                document.body.classList.remove('page-loading');

                if (cb instanceof Function) {
                    cb();
                }
            }).catch(function() {
                // error
            });
        } else if ( mode === 'light' ) {
            Promise.all([
                loadCssFile('plugins.dark.bundle.css', 'plugins.bundle.css'),
                loadCssFile('style.dark.bundle.css', 'style.bundle.css')
            ]).then(function() {
                // Remove dark mode class
                document.body.classList.remove("dark-mode");

                // Remove page loading srate
                document.body.classList.remove('page-loading');

                // Callback
                if (cb instanceof Function) {
                    cb();
                }
            }).catch(function() {
                // error
            });
        }             
    }

    return {
        init: function () {
            this.initBootstrapTooltips();

            this.initBootstrapPopovers();

            this.initBootstrapScrollSpy();

            this.initDaterangepicker();

            this.initButtons();

            this.initCheck();

            this.initSelect2();

            this.initCountUp();

            this.initCountUpTabs();

            this.initAutosize();

            this.initTinySliders();

            this.initSmoothScroll();

            this.initBootstrapToast();

            this.initBootstrapCollapse();

            this.initBootstrapRotate();
        },

        initPageLoader: function () {
            initPageLoader();
        },

        initDaterangepicker: function() {
            initDaterangepicker();
        },

        initBootstrapTooltip: function (el, options) {
            return initBootstrapTooltip(el, options);
        },

        initBootstrapTooltips: function () {
            initBootstrapTooltips();
        },

        initBootstrapModal: function() {
            initModal();
        },

        initBootstrapPopovers: function () {
            initBootstrapPopovers();
        },

        initBootstrapPopover: function (el, options) {
            return initBootstrapPopover(el, options);
        },

        initBootstrapScrollSpy: function () {
            initBootstrapScrollSpy();
        },        

        initBootstrapToast: function () {
            initBootstrapToast();
        },

        initBootstrapCollapse: function() {
            initBootstrapCollapse();
        },

        initBootstrapRotate: function() {
            initBootstrapRotate();
        },

        initButtons: function () {
            initButtons();
        },

        initCheck: function () {
            initCheck();
        },

        initSelect2: function () {
            initSelect2();
        },

        initCountUp: function () {
            initCountUp();
        },

        initCountUpTabs: function () {
            initCountUpTabs();
        },

        initAutosize: function () {
            initAutosize();
        },

        initTinySliders: function () {
            initTinySliders();
        },

        initSmoothScroll: function () {
            initSmoothScroll();
        },

        isDarkMode: function () {
            return document.body.classList.contains('dark-mode');
        },

        setThemeMode: function(mode, cb) {
            setThemeMode(mode, cb);
        }
    };
}();

// Initialize app on document ready
KTUtil.onDOMContentLoaded(function () {
    KTApp.init();
});

// Initialize page loader on window load
window.addEventListener("load", function() {
    KTApp.initPageLoader();
});

// Declare KTApp for Webpack support
if (typeof module !== 'undefined' && typeof module.exports !== 'undefined') {
    module.exports = KTApp;
}