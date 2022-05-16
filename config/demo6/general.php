<?php
return array(
    // Assets
    'assets' => array(
        'favicon' => 'media/logos/favicon.ico',
        'fonts' => array(
            'google' => array(
                'Poppins:300,400,500,600,700'
            )
        ),
        'css' => array(
            'plugins/global/plugins.bundle.css',
            'plugins/global/plugins-custom.bundle.css',
            'css/style.bundle.css',
        ),
        'js' => array(
            'plugins/global/plugins.bundle.js',
            'js/scripts.bundle.js',
            'js/custom/widgets.js',
        ),
    ),

    // Layout
    'layout' => array(
        // Main
        'main' => array(
            'base' => 'default', // Set base layout: default|docs
            'type' => 'default', // Set layout type: default|blank|none
            'dark-mode-enabled' => true, // Enable optioanl dark mode mode
            'primary-color' => '#009EF7'
        ),

        // Docs
        'docs' => array(
            'logo-path' => array(
                'default' => 'logos/logo-1.svg',
                'dark' => 'logos/logo-1-dark.svg'
            ),
            'logo-class' => 'h-25px'
        ),

        // Illustration
        'illustrations' => array(
            'set' => 'sketchy-1'
        ),

        // Loader
        'loader' => array(
            'display' => false,
            'type' => 'default' // Set default|spinner-message|spinner-logo to hide or show page loader
        ),

        // Header
        'header' => array(
            'display' => true, // Display header
            'width' => 'fluid', // Set header width(fixed|fluid)
            'left' => 'menu', // Set left part content(menu|page-title)
            'fixed' => array(
                'desktop' => true,  // Set fixed header for desktop
                'tablet-and-mobile' => true // Set fixed header for talet & mobile
            ),
            'menu-icon' => 'font' // Menu icon type(svg|font)
        ),

        // Toolbar
        'toolbar' => array(
            'display' => true, // Display toolbar
            'width' => 'fluid', // Set toolbar container width(fluid|fixed)
            'fixed' => array(
                'desktop' => true,  // Set fixed header for desktop
                'tablet-and-mobile' => false // Set fixed header for talet & mobile
            )
        ),

        // Page title
        'page-title' => array(
            'display' => true, // Display page title
            'breadcrumb' => true, // Display breadcrumb
            'description' => false, // Display description
            'responsive' => true, // Move page title to cotnent on mobile mode
            'responsive-breakpoint' => 'lg', // Responsive breakpoint value(e.g: md, lg, or 300px)
            'responsive-target' => '#kt_toolbar_container' // Responsive target selector
        ),

        // Aside
        'aside' => array(
            'display' => true, // Display aside
            'fixed' => true,  // Enable aside fixed mode
            'menu-icon' => 'font' // Menu icon type(svg|font)
        ),

        // Content
        'content' => array(
            'width' => 'fixed', // Set content width(fixed|fluid)
        ),

        // Footer
        'footer' => array(
            'width' => 'fluid' // Set fixed|fluid to change width type
        ),

        // Scrolltop
        'scrolltop' => array(
            'display' => true // Display scrolltop
        )
    )
);
