<?php
return array(
    '' => array(
        'title' => 'Dashboard',
        'description' => '#XRS-45670',
        'view' => 'index',
        'layout' => array(
            'page-title' => array(
                'description' => true,
                'breadcrumb' => false
            )
        ),
        'assets' => array(
            'vendors' => array(
                'css' => array(
                    'plugins/custom/fullcalendar/fullcalendar.bundle.css'
                ),
                'js' => array(
                    'plugins/custom/fullcalendar/fullcalendar.bundle.js'
                )
            )
        )
    ),

    'dashboards' => array(
        'compact' => array(
            'title' => 'Compact',
            'view' => 'index',
            'layout' => array(
                'header' => array(
                    'left' => 'page-title',
                ),
                'page-title' => array(
                    'description' => false,
                    'breadcrumb' => true
                ),
                'toolbar' => array(
                    'display' => true
                )
            ),
            'assets' => array(
                'vendors' => array(
                    'css' => array(
                        'plugins/custom/fullcalendar/fullcalendar.bundle.css'
                    ),
                    'js' => array(
                        'plugins/custom/fullcalendar/fullcalendar.bundle.js'
                    )
                )
            )
        ),
        'minimal' => array(
            'title' => 'Minimal',
            'view' => 'index',
            'layout' => array(
                'header' => array(
                    'left' => 'page-title',
                ),
                'toolbar' => array(
                    'display' => false,
                ),
                'page-title' => array(
                    'description' => false,
                    'breadcrumb' => true
                )
            ),
            'assets' => array(
                'vendors' => array(
                    'css' => array(
                        'plugins/custom/fullcalendar/fullcalendar.bundle.css'
                    ),
                    'js' => array(
                        'plugins/custom/fullcalendar/fullcalendar.bundle.js'
                    )
                )
            )
        ),
        'header' => null
    ),

    'layout-builder' => array(
        'title' => 'Layout Builder',
        'description' => 'Real-time layout options preview and export',
        'view' => 'layout-builder',
        'layout' => array(
            'page-title' => array(
                'breadcrumb' => false // hide breadcrumb
            )
        ),
        'assets' => array(
            'custom' => array(
                'js' => array(
                    'js/custom/layout-builder/layout-builder.js'
                )
            )
        )
    )
);
