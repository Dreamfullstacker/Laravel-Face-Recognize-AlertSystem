<?php
return array(
    // Assets
    'assets' => array(
        'favicon' => 'media/logos/favicon.ico',
        'fonts'   => array(
            'google' => array(
                'Poppins:300,400,500,600,700',
            ),
        ),
        'css'     => array(
            'plugins/global/plugins.bundle.css',
            'plugins/global/plugins-custom.bundle.css',
            'css/style.bundle.css',
        ),
        'js'      => array(
            'plugins/global/plugins.bundle.js',
            'js/scripts.bundle.js',
            'js/custom/widgets.js',
        ),
    ),

    // Layout
    'layout' => array(
        // Main
        'main'          => array(
            'type'              => 'default', // Set layout type: default|blank|none
            'dark-mode-enabled' => true, // Enable optioanl dark mode mode
            'primary-color'     => '#009EF7', // Primary color used in email templates
            'page-bg-white'     => false, // Set true if page background color is white
        ),

        // Docs
        'docs'          => array(
            'logo-path'  => array(
                'default' => 'logos/logo-1.svg',
                'dark'    => 'logos/logo-1-dark.svg',
            ),
            'logo-class' => 'h-25px',
        ),

        // Illustration
        'illustrations' => array(
            'set' => 'sketchy-1',
        ),

        // Loader
        'loader'        => array(
            'display' => false,
            'type'    => 'default' // Set default|spinner-message|spinner-logo to hide or show page loader
        ),

        // Header
        'header'        => array(
            'width' => 'fluid', // Set header width(fixed|fluid)
            'fixed' => array(
                'tablet-and-mobile' => true // Set fixed header for talet & mobile
            ),
        ),

        // Aside
        'aside'         => array(
            'minimized' => false, // Set aside minimized by default
            'minimize'  => true, // Allow aside minimize toggle
        ),

        // Content
        'content'       => array(
            'width' => 'fixed', // Set content width(fixed|fluid)
        ),

        // Footer
        'footer'        => array(
            'width' => 'fluid' // Set fixed|fluid to change width type
        ),

        // Scrolltop
        'scrolltop'     => array(
            'display' => true // Display scrolltop
        ),
    ),
);
